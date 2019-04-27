<?php
/**
 * Plugin Name: Add Event Venue to Month View Tooltip - The Events Calendar Extension
 * Plugin URL: https://thetechsurge.com/
 * Description: Add the event venue/location to the tooltip that is displayed on hover over in the month view of the claendar when using The Events Calenar or The Events Calendar Pro by Modern Tribe.
 * Author: Michael Weiner
 * Author URL: https://thetechsurge.com/
 * Version: 1.0.0
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Exit plugin if it is being accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Call 'trive_filter_template_paths' to add an additional directory to look for template overrides
function tribe_filter_template_paths ( $file, $template ) {

	// Set the path for the event system to look for additional overrides for events created with the classic editor for the standard and pro version of The Events Calendar
	$custom_file_path = ABSPATH . 'wp-content/plugins/tribe-extension-venue-on-tooltip/tribe-events/' . $template;
	$custom_file_path_pro = ABSPATH . 'wp-content/plugins/tribe-extension-venue-on-tooltip/tribe-events/pro/' . $template;

	// Set the path for the event system to look for additional overrides for events created with the block editor for the standard and pro version of The Events Calendar
	$custom_file_path_block = ABSPATH . 'wp-content/plugins/tribe-extension-venue-on-tooltip/tribe/events/' . $template;
	$custom_file_path_block_pro = ABSPATH . 'wp-content/plugins/tribe-extension-venue-on-tooltip/tribe/events/pro/' . $template;

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
