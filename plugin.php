<?php
/**
 * Plugin Name: Add Event Venue to Month View Tooltip - The Events Calendar Extension
 * Plugin URI: https://thetechsurge.com/
 * Description: Add the event venue/location to the tooltip that is displayed on hover over in the month view of the claendar when using The Events Calenar or The Events Calendar Pro by Modern Tribe.
 * Author: Michael Weiner
 * Author URI: https://thetechsurge.com/
 * Version: 1.0.0
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Exit plugin if it is being accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/*
Admin Settings Page
*/

// Call venue_on_month_settings_page_create() to create a settings pgae to display in the admin sidebar
add_action('admin_menu', 'venue_on_month_settings_page_create');

// Create Settings Page for the Plugin
function venue_on_month_settings_page_create() {
		$page_title = 'Add Event Venue to Month View';
    $menu_title = 'Add Event Venue to Month View';
    $capability = 'activate_plugins';
    $menu_slug = 'event_venue_on_month_view';
    $function = 'venue_on_month_settings_page_display';
    $icon_url = 'dashicons-calendar';
    $position = 7;

		// Call add_menu_page() using the defined variables above to be passed in
    add_menu_page($page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position);
}

// Callback function used in venue_on_month_settings_page_create() to populate the settings page
function venue_on_month_settings_page_display() {
    echo '<h1>Add Event Venue to Month View</h1>';
}

// Establish directory paths for the template overrides to be used the The Events Calendar Plugin already installed separately by the user
// Call 'trive_filter_template_paths' to add an additional directory to look for template overrides
// tribe_events_template() comes from the Modern Tribe The Events Claendar Plugin installled on the site
function tribe_filter_template_paths ( $file, $template ) {

	// Set the path for the event system to look for additional overrides for events created with the classic editor for the standard and pro version of The Events Calendar
	$custom_file_path = ABSPATH . 'wp-content/plugins/add-event-venue-to-month-view-tooltip-the-events-calendar-extension/tribe-events/' . $template;
	$custom_file_path_pro = ABSPATH . 'wp-content/plugins/add-event-venue-to-month-view-tooltip-the-events-calendar-extension/tribe-events/pro/' . $template;

	// Set the path for the event system to look for additional overrides for events created with the block editor for the standard and pro version of The Events Calendar
	$custom_file_path_block = ABSPATH . 'wp-content/plugins/add-event-venue-to-month-view-tooltip-the-events-calendar-extension/tribe/events/' . $template;
	$custom_file_path_block_pro = ABSPATH . 'wp-content/plugins/add-event-venue-to-month-view-tooltip-the-events-calendar-extension/tribe/events/pro/' . $template;

	// If the event system does not find any template overrides in the directory specified --> return the default template files
	if ( !file_exists($custom_file_path) ) {
		return $file;
	}
	if ( !file_exists($custom_file_path_pro) ) {
		return $file;
	}
	if ( !file_exists($custom_file_path_block) ) {
		return $file;
	}
	if ( !file_exists($custom_file_path_block_pro) ) {
		return $file;
	}

	// If the event system does find any template overrides in any of the directories specified --> return the new template override
	return $custom_file_path;
	return $custom_file_path_pro;
	return $custom_file_path_block;
	return $custom_file_path_block_pro;
}

add_filter( 'tribe_events_template', 'tribe_filter_template_paths', 10, 2 ); // Call the function created to check for additional overrides
