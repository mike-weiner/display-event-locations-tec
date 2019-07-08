<?php

// Exit file if it is being accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
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