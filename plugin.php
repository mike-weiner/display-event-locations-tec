<?php
/**
 * Plugin Name: Display Event Locations for The Events Calendar
 * Plugin URI: https://thetechsurge.com/
 * Description: Add the event venue/location to the tooltip that is displayed on hover over in the month view of the calendar when using The Events Calendar or The Events Calendar Pro by Modern Tribe.
 * Author: Michael Weiner
 * Author URI: https://thetechsurge.com/
 * Version: 2.1
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Exit plugin if it is being accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


/********************************************************************
 * Call in all dependencies to other files
 * Check to make sure a user is an admin before calling in /includes/settings-page/*
 *********************************************************************/
// Check to make sure the user is an admin before pulling in sensitive settings page dependencies
if (is_admin()) {
    //Get Files
    require_once plugin_dir_path(__FILE__) . 'includes/settings-page/admin-menu.php';
    require_once plugin_dir_path(__FILE__) . 'includes/settings-page/settings-page.php';
    require_once plugin_dir_path(__FILE__) . 'includes/settings-page/settings-register.php';
    require_once plugin_dir_path(__FILE__) . 'includes/settings-page/settings-callbacks.php';
    require_once plugin_dir_path(__FILE__) . 'includes/settings-page/settings-validate.php';
}


/********************************************************************
 * Modify Display Event Locations plugin admin page listing
 * Adds additional links for: (1) Settings Page, (2) Support/PayPal Page
 *********************************************************************/
// Create function & call hook to add links to the left-hand side of the plugin listing on the admin page
function deltec_register_action_links($deltec_links) {
    // Add action link to settings page
    $deltec_settings_url = menu_page_url('deltec_settings', false);
    $deltec_settings_link = '<a href="'.$deltec_settings_url.'">' . __( 'Settings', 'settings' ) . '</a>';
    $deltec_links[] = $deltec_settings_link; // Add settings_link to array of links to be returned

    // Return the array of custom links established above
    return $deltec_links;
}
add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'deltec_register_action_links' );

// Create function & call hook to add links to the right-hand side of the plugin listing on the admin page
function deltec_register_meta_links ($deltec_links, $deltec_file) {
    $deltec_base = plugin_basename(__FILE__);
    if ($deltec_file == $deltec_base) { // Check to make sure we are editing our plugin listing
        $deltec_links[] = '<a href="'.menu_page_url('deltec_settings', false).'">' . __( 'Settings', 'settings' ) . '</a>';
        $deltec_links[] = '<a href="https://paypal.me/michaelw13" target="_blank">' . __('Support Our Work') . '</a>';
    }
    return $deltec_links;
}
add_filter('plugin_row_meta',  'deltec_register_meta_links', 10, 2);


/********************************************************************
 * Remove deltec_options from WP database on uninstall
 * Uses register_uninstall and register_activation hooks
 * Upon activation get the default option for 'deltec_options' 
 *********************************************************************/
function deltec_on_activate(){
    // Set the values of the options on the settings page to their defaults on first activation of the plugin
    $options = update_option('deltec_options', deltec_options_default());
}
register_activation_hook(__FILE__,'deltec_on_activate'); // Call deltec_on_activate() when the plugin in activated

function deltec_on_uninstall() {
    delete_option('deltec_options'); // Remove deltec_options from the WP database upon uninstallation
}
register_uninstall_hook( __FILE__, 'deltec_on_uninstall' );


/********************************************************************
 * Function to establish a set of default values for the stored deltec_options array
 * Called by deltec_on_activate() to give the settings their default values on activation
 *********************************************************************/
// Create a function that establishes a set of default options for each field if they cannot be pulled from the database
function deltec_options_default() {
    return array (
        'pre-venue-message' => 'Location:',
        'display-full-address' => '',
    );
}


/********************************************************************
 * Establish directory paths for the template overrides to be used the The Events Calendar Plugin already installed separately by the user
 * deltec_ is the custom prefix used for all classes and functions within the plugin
 *********************************************************************/
// Call 'deltec_trive_filter_template_paths' to add additional directory paths to look for template overrides
// tribe_events_template() comes from the Modern Tribe The Events Calendar Plugin installed on the site
function deltec_tribe_filter_template_paths ( $file, $template ) {

    // Set the path for the event system to look for additional overrides for events created with the classic editor for the standard and pro version of The Events Calendar
    $deltec_custom_file_path = plugin_dir_path(__FILE__) . 'tribe-events/' . $template;
    $deltec_custom_file_path_pro = plugin_dir_path(__FILE__) . 'tribe-events/' . $template;

    // Set the path for the event system to look for additional overrides for events created with the block editor for the standard and pro version of The Events Calendar
    $deltec_custom_file_path_block = plugin_dir_path(__FILE__) . 'tribe/events/' . $template;
    $deltec_custom_file_path_block_pro = plugin_dir_path(__FILE__) . 'tribe/events/' . $template;

    // If the event system does not find any template overrides in the directory specified --> return the default template files
    if ( !file_exists($deltec_custom_file_path) ) {
        return $file;
    }
    if ( !file_exists($deltec_custom_file_path_pro) ) {
        return $file;
    }
    if ( !file_exists($deltec_custom_file_path_block) ) {
        return $file;
    }
    if ( !file_exists($deltec_custom_file_path_block_pro) ) {
        return $file;
    }

    // If the event system does find any template overrides in any of the directories specified --> return the new template override
    return $deltec_custom_file_path;
    return $deltec_custom_file_path_pro;
    return $deltec_custom_file_path_block;
    return $deltec_custom_file_path_block_pro;
}
add_filter('tribe_events_template', 'deltec_tribe_filter_template_paths', 10, 2); // Call the function created to check for additional overrides

// Add function & hook to add additional information to the array of data used for the template
function deltec_tribe_template_data_array ( $json, $event, $additional ){
    $venue = tribe_get_venue_id($event);
    if ($venue){
        $json['venue'] = $venue;
        $json['venue_link'] = tribe_get_venue_link($venue, false);
        $json['venue_title'] = tribe_get_venue($venue);
        $json['venue_address'] = tribe_get_address($venue);
        $json['venue_city'] = tribe_get_city($venue);
        $json['venue_state'] = tribe_get_state($venue);
        $json['venue_zip'] = tribe_get_zip($venue);
    }
    return $json;
}
add_filter('tribe_events_template_data_array', 'deltec_tribe_template_data_array', 10, 3);

