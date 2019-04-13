<?php
/**
 * Plugin Name: The Events Calendar Extension: Add Venue/Location to Month View Tooltip
 * Plugin URI: https://thetechsurge.com/
 * Description: Add the event venue/location to the tooltip that is displayed on hover over in the month view of the claendar.
 * Author: Michael Weiner
 * Author URI: https://thetechsurge.com/
 * Version: 1.0.0
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Exit plugin if it is being accessed directlu
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Call 'trive_filter_template_paths' to add an additional directory to look for template overrides
function tribe_filter_template_paths ( $file, $template ) {

	// Set the path for the event system to look for additional overrides for events created with the classic editor for the standard and pro version of The Events Calendar
	$custom_file_path = ABSPATH . 'wp-content/plugins/Tribe-Extension-Venue-On-Tooltip/tribe-events/' . $template;
	$custom_file_path_pro = ABSPATH . 'wp-content/plugins/Tribe-Extension-Venue-On-Tooltip/tribe-events/pro/' . $template;

	// Set the path for the event system to look for additional overrides for events created with the block editor for the standard and pro version of The Events Calendar
	$custom_file_path_block = ABSPATH . 'wp-content/plugins/Tribe-Extension-Venue-On-Tooltip/tribe/events/' . $template;
	$custom_file_path_block_pro = ABSPATH . 'wp-content/plugins/Tribe-Extension-Venue-On-Tooltip/tribe/events/pro/' . $template;

	// If the event system does not find any template overrides in the directory specified --> use the default template files
	if ( !file_exists($custom_file_path) ) {
		return $file; // Return the original file
	}
	if ( !file_exists($custom_file_path_pro) ) {
		return $file; // Return the original file
	}
	if ( !file_exists($custom_file_path_block) ) {
		return $file; // Return the original file
	}
	if ( !file_exists($custom_file_path_block_pro) ) {
		return $file; // Return the original file
	}

	// If the event system does find any template overrides in any of the directories specified --> use the new template override
	return $custom_file_path;
	return $custom_file_path_pro;
	return $custom_file_path_block;
	return $custom_file_path_block_pro;
}

add_filter( 'tribe_events_template', 'tribe_filter_template_paths', 10, 2 ); // Call the function created to check for additional overrides
