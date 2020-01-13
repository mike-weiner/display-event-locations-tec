<?php
/**
 * Plugin Name: Display Event Locations for The Events Calendar
 * Plugin URI: https://thetechsurge.com/
 * Description: Add the event venue/location to the tooltip that is displayed on hover over in the month view of the calendar when using The Events Calendar or The Events Calendar Pro by Modern Tribe.
 * Author: Michael Weiner
 * Author URI: https://thetechsurge.com/
 * Version: 2.2
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

 /*********************************************************************
 *  Exit plugin if it is being accessed directly
 * 
 * @link
 *
 * @see 
 * 
 * @param 
 *
 * @return 
 *********************************************************************/
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


/*********************************************************************
 * Call in all dependencies to other files
 * User must be an admin before calling in /includes/settings-page/*
 * 
 * @link
 *
 * @see 
 * 
 * @param 
 *
 * @return 
 *********************************************************************/
if (is_admin()) {
    require_once plugin_dir_path(__FILE__) . 'includes/settings-page/admin-menu.php';
    require_once plugin_dir_path(__FILE__) . 'includes/settings-page/settings-page.php';
    require_once plugin_dir_path(__FILE__) . 'includes/settings-page/settings-register.php';
    require_once plugin_dir_path(__FILE__) . 'includes/settings-page/settings-callbacks.php';
    require_once plugin_dir_path(__FILE__) . 'includes/settings-page/settings-validate.php';
}


/*********************************************************************
 * Modify Display Event Locations plugin admin page listing
 * Adds 'Settings' action link for plugin listing
 * 
 * @link
 *
 * @see 
 * 
 * @param string $deltec_links       |   placeholder for array of links to be returned to WP
 * 
 * @return array                     |   array of html ahref links for WP to use on settings page
 *********************************************************************/
function deltec_register_action_links($deltec_links) {
    // Get the file path to the root directory of this plugin
    $deltec_base = plugin_basename(__FILE__);

    // Get settings page for the Display Event Locations for The Events Calendar settings page
    $deltec_settings_url = menu_page_url('deltec_settings', false);

    // Create HTML ahref to the settings page
    $deltec_settings_link = '<a href="'.$deltec_settings_url.'">' . __( 'Settings', 'settings' ) . '</a>';

    // Add settings_link to array of links to be returned
    $deltec_links[] = $deltec_settings_link; 
    // Return the array of custom links established above

    return $deltec_links;
}
add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'deltec_register_action_links' );


/*********************************************************************
 * Modify Display Event Locations plugin admin page listing
 * Adds 'Dpnate' action link for plugin listing
 * 
 * @link
 *
 * @see 
 * 
 * @param string $deltec_links   |   placeholder for array of links to be returned to WP
 * @param string $deltec_file    |   file path to the plugin listing being edited
 * 
 * @return array                 |   array of html ahref links for WP to use on settings page
 *********************************************************************/
function deltec_register_meta_links ($deltec_links, $deltec_file) {
    // Get the file path to the root directory of this plugin
    $deltec_base = plugin_basename(__FILE__);

    // Check to make sure we are editing our plugin listing
    if ($deltec_file == $deltec_base) { 
        // Add link to the settings page under the plugin description
        $deltec_links[] = '<a href="'.menu_page_url('deltec_settings', false).'">' . __( 'Settings', 'settings' ) . '</a>';

        // Add link to make a financial contribution under the plugin description
        $deltec_links[] = '<a href="https://paypal.me/michaelw13" target="_blank">' . __('Support Our Work') . '</a>';
    }
    
    // Return the array of custom links created above
    return $deltec_links;
}
add_filter('plugin_row_meta',  'deltec_register_meta_links', 10, 2);


 /*********************************************************************
 * Initialize an array to store the deafult deltec_options for WP to use
 * 
 * @link
 *
 * @see deltec_on_activate()
 * 
 * @param 
 * 
 * @return  
 *********************************************************************/
function deltec_options_default() {
    return array (
        'pre-venue-message' => 'Location:',
        'display-full-address' => '',
    );
}


 /*********************************************************************
 * Initialize default deltec_options to WP options database upon installation
 * 
 * @link
 *
 * @see 
 * 
 * @param 
 * 
 * @return  
 *********************************************************************/
function deltec_on_activate(){
    // Set the values of the deltec options to their defaults on first activation of the plugin
    $options = update_option('deltec_options', deltec_options_default());
}
register_activation_hook(__FILE__,'deltec_on_activate'); // Call deltec_on_activate() when the plugin in activated


 /*********************************************************************
 * Initialize default deltec_options to WP options database upon installation
 * 
 * @link
 *
 * @see 
 * 
 * @param 
 * 
 * @return  
 *********************************************************************/
function deltec_on_uninstall() {
    // Remove deltec_options from the WP database upon uninstallation
    delete_option('deltec_options'); 
}
register_uninstall_hook( __FILE__, 'deltec_on_uninstall' );


 /*********************************************************************
 * Determine the version of the The Events Calendar Plugin
 * 
 * @link
 *
 * @see 
 * 
 * @param 
 * 
 * @return string   |   version of TEC (nothing retured if TEC is not installed AND active)
 *********************************************************************/
function deltec_get_tec_plugin_version() {
    // Call in Wordpress Plugins API & Hooks Needed
    include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

    // Get all installed plugins
    $deltec_all_plugins = get_plugins();

    // Get all of the path directories for installed plugins
    $deltec_all_plugin_paths_array = ( array_keys( $deltec_all_plugins ) );

    // For every path directory for installed plugins
    foreach ( $deltec_all_plugin_paths_array as $deltec_plugin_individual)  {

        // If the plugin path is active AND its name is either 'The Events Calendar' OR 'The Events Calendar Pro' --> Return its Version Number
       if ( is_plugin_active($deltec_plugin_individual) AND ($deltec_all_plugins[$deltec_plugin_individual]['Name'] == 'The Events Calendar' OR $deltec_all_plugins[$deltec_plugin_individual]['Name'] == 'The Events Calendar Pro') ) {
            return($deltec_all_plugins[$deltec_plugin_individual]['Version']);
       }
    }
}


/*********************************************************************
 * Establish directory paths for the template overrides to be used by TEC installed with this plugin
 * 
 * 
 * @link https://gist.github.com/b76421f2490a8b8995493f203e11b331
 *
 * @see Tribe__Events__Templates::getTemplateHierarchy()
 *
 * @param string $file       |   file path trying to be loaded
 * @param string $template   |   template name
 *
 * @return string            |   string of full file path to template
 *********************************************************************/
function deltec_tribe_filter_template_paths_legacy ( string $file, string $template ) {
    // Put custom temapltes in order of priority for legacy TEC (up to 5.0)
    // Will check this plugin and then any modifications within child themes
	$deltec_template_paths_legacy = [
		'deltec_plugin_tec_legacy'   => plugin_dir_path(__FILE__) . 'tribe-events/' . $template,
		'active_theme_tec_legacy' => get_theme_root() . 'tribe-events/',
    ];

    /*

    TO DO: Add in support for TEC 5.0+


    // Determine if legacy or v2 template overrides should be used
    if ( deltec_get_tec_plugin_version() < '5.0') {
    
    } else {
    
    }

    */
    
    // For every custom template file path within $deltec_template_paths_legacy --> check if it exists 
	foreach ($deltec_template_paths_legacy as $deltec_single_path_legacy) {
		if (file_exists($deltec_single_path_legacy)) {
			return $deltec_single_path_legacy;
		}
    }
    
    // If none of the file paths within $deltec_template_paths_legacy use the default template from TEC
	return $file;
}
add_filter('tribe_events_template', 'deltec_tribe_filter_template_paths_legacy', 10, 2);

/*********************************************************************
 * Returns json with additional information for tooltip to be used with javascript templating functions for tooltip
 * 
 * 
 * @link 
 *
 * @see tribe_events_template_data_array
 *            src/functions/template-tags/general.php
 *
 * @param $json       
 * @param $event 
 * @param $additional 
 *
 * @return string         |      json that will be used with javascript templating
 *********************************************************************/
function deltec_tribe_template_data_array ( $json, $event, $additional ){
    // Get the venue being hovered over
    $venue = tribe_get_venue_id($event);

    // If the venue exists get the inforation needed for the tooltip template override
    if ($venue) {
        $json['venue'] = $venue;
        $json['venue_link'] = tribe_get_venue_link($venue, false);
        $json['venue_title'] = tribe_get_venue($venue);
        $json['venue_address'] = tribe_get_address($venue);
        $json['venue_city'] = tribe_get_city($venue);
        $json['venue_state'] = tribe_get_state($venue);
        $json['venue_zip'] = tribe_get_zip($venue);
    }

    // Return the json that will be used with javascript templating
    return $json;
}
add_filter('tribe_events_template_data_array', 'deltec_tribe_template_data_array', 10, 3);

