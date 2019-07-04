<?php
/**
 * Plugin Name: Display Event Locations for The Events Calendar
 * Plugin URI: https://thetechsurge.com/
 * Description: Add the event venue/location to the tooltip that is displayed on hover over in the month view of the claendar when using The Events Calenar or The Events Calendar Pro by Modern Tribe.
 * Author: Michael Weiner
 * Author URI: https://thetechsurge.com/
 * Version: 1.1
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Exit plugin if it is being accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/********************************************************************
 *
 * DEPENDENCIES
 * Import needed files within the plugin folder
 *
 *********************************************************************/
// Pull in files related to the admin area of the WP backend
if (is_admin()) {
    require_once plugin_dir_path(__FILE__) . 'admin/admin-menu.php';
}

/********************************************************************
 * Modify Display Event Locations plugin admin page listing
 * Adds additional links for: (1) Settings Page, (2) Support/PayPal Page
 *********************************************************************/

// Create function & call hook to add links to the left-hand side of the plugin listing on the admin page
function deltec_register_action_links($deltec_links) {
    // Add action link to settings page
    $deltec_settings_url = '/wp-admin/options-general.php?page=deltec_settings';
    $deltec_settings_link = '<a href="'.$deltec_settings_url.'">' . __( 'Settings', 'settings' ) . '</a>';
    $deltec_links[] = $deltec_settings_link; // Add settings_link to array of links to be returned

    // Add action link to donate/PayPal page
    $deltec_donate_url = 'https://paypal.me/michaelw13?locale.x=en_US';
    $deltec_donate_link = '<a href="'.$deltec_donate_url.'" target="_blank">' . __( 'Support Our Work', 'support-our-work' ) . '</a>';
    $deltec_links[] = $deltec_donate_link; // Add donate_link to array of links to be returned

    // Return the array of custom links established above
    return $deltec_links;
}
add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'deltec_register_action_links' );

// Create function & call hook to add links to the right-hand side of the plugin listing on the admin page
function deltec_register_meta_links ($deltec_links, $deltec_file) {
    $deltec_base = plugin_basename(__FILE__);
    if ($deltec_file == $deltec_base) { // Check to make sure we are editing our plugin listing
        $deltec_links[] = '<a href="/wp-admin/options-general.php?page=deltec_settings">' . __('Settings') . '</a>';
        $deltec_links[] = '<a href="https://paypal.me/michaelw13?locale.x=en_US" target="_blank">' . __('Support Our Work') . '</a>';
    }
    return $deltec_links;
}
add_filter('plugin_row_meta',  'deltec_register_meta_links', 10, 2);

/********************************************************************
 * Establish settings page for plugin
 * Uses: (1) Settings Wordpress API, (2) Options Wordpress API
 *********************************************************************/


// Add items to the Display Event Locations for The Events Calendar settings page
function deltec_display_settings_page() {
    // Check to make sure the user has access to the page (via Admin account)
    if (!current_user_can('manage_options')) {
        return; // If they do not have the needed permissions to view this page => return nothing
    }
    ?>

    <div class="wrap">
        <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
        <form action="options.php" method="post">
            <?php
            //Output Security Fields
            settings_fields( 'deltec_options');

            //Output Setting Sections
            do_settings_sections('deltec_settings');

            //Submit Button
            submit_button();
            ?>
        </form>
    </div>

    <?php
}

// Register settings for the deltec_settings_page
function deltec_register_settings(){
    register_setting(
        'deltec_options',
        'deltec_options',
        'deltec_validate_options'
    );

    // Adds Setting Section for Tooltip Message Options
    add_settings_section (
        'deltec_section_tool_tip', // Section Name/ID
        'Customize Tooltip Message', // Title of section on page
        'deltec_callback_settings_section_tool_tip', // Callback fFunction
        'deltec_settings' //Slug of page on which to display
    );

    // Adds settings field for tooltip message before the venue/location name of the event in the tooltip
    add_settings_field (
        'pre-venue-message', // Setting ID
        'Tooltip Message Before Venue/Location Name', // Title of the setting displayed on the page
        'deltec_callback_pre_venue_message_text_field', // Callback function
        'deltec_settings', // Page on which setting is displayed
        'deltec_section_tool_tip', // Section that should display the setting on the settings page
        ['id' => 'pre-venue-message', 'label' => "Enter the message/phrase that you would like to display before the event's location name in the tooltip."] // Array that contains data for the callback function
    );
}
add_action('admin_init', 'deltec_register_settings');

//Callback function for tooltip settings section on the Deltec Settings page
function deltec_callback_settings_section_tool_tip() {
    echo '<p>Use the text field below to modify the message/phrase that is displayed before the event venue/location in the tooltip that is displayed on hover for the user.</p>';
}

// Callback function for the pre-venue-message field on the deltec settings page
function deltec_callback_pre_venue_message_text_field($args) {
    $options = get_option('deltec_options', deltec_options_default());

    $id = isset($args['id']) ? $args['id'] : '';
    $label = isset($args['label']) ? $args['label'] : '';

    $value = isset($options[$id]) ? sanitize_text_field($options[$id]) : '';

    echo '<input id="deltec_options_'.$id.'"name="deltec_options['.$id.']" type="text" size="40" value="'.$value.'"><br />';
    echo '<label for="deltec_options_'.$id.'">'.$label.'</label>';
}

// Create a function that establishes a set of default options for each field if they cannot be pulled from the database
function deltec_options_default() {
    return array (
        'pre-venue-message' => 'Location:'
    );
}

// Validate & Clean settings fields on the deltec settings page
function deltec_validate_options($input)
{
    if (isset ($input['pre-venue-message'])) {
        $input['pre-venue-message'] = sanitize_text_field($input['pre-venue-message']); // Santitize the pre-venue-message text field to make sure that only plain text is being saved into the database
    }

    return $input;
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
add_filter( 'tribe_events_template', 'deltec_tribe_filter_template_paths', 10, 2 ); // Call the function created to check for additional overrides


// Add function & hook to add additional information to the array of data used for the template
function deltec_tribe_template_data_array ( $json, $event, $additional ){
	$venue = tribe_get_venue_id($event);
	if ($venue){
		$json['venue'] = $venue;
		$json['venue_link'] = tribe_get_venue_link($venue, false);
		$json['venue_title'] = tribe_get_venue($venue);
	}
	return $json;
}
add_filter( 'tribe_events_template_data_array', 'deltec_tribe_template_data_array', 10, 3 );

?>
