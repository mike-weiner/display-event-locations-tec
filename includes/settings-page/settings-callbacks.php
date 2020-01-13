<?php

 /*********************************************************************
 * Exit file if it is being accessed directly
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
 * Callback function for tooltip settings section on the deltec settings page
 * 
 * @link
 *
 * @see deltec_register_settings 
 *           /includes/settings-register.php
 * 
 * @param 
 *
 * @return 
 *********************************************************************/
function deltec_callback_settings_section_tool_tip() {
    echo '<p>Use the text field below to modify the message/phrase that is displayed before the event venue/location in the tooltip that is displayed on hover for the user.</p>';
}


 /*********************************************************************
 * Callback function for the pre-venue-message field on the deltec settings page
 * 
 * @link
 *
 * @see deltec_register_settings 
 *           /includes/settings-register.php
 * 
 * @param 
 *
 * @return 
 *********************************************************************/
function deltec_callback_pre_venue_message_text_field($args) {
    // Get the row within the wp_options table for the custom deltec options
    $options = get_option('deltec_options', deltec_options_default());

    // Parse the id, label, and value fields for the html input tag from the settings field
    $deltec_prm_id = isset($args['id']) ? $args['id'] : '';
    $deltec_prm_label = isset($args['label']) ? $args['label'] : '';
    $deltec_prm_value = isset($options[$deltec_prm_id]) ? sanitize_text_field($options[$deltec_prm_id]) : '';

    // Eacho out the html for the input tag and the label that will be displayed for the 'Tooltip Message Before Venue/Location Name' text field
    echo '<input id="deltec_options_'.$deltec_prm_id.'"name="deltec_options['.$deltec_prm_id.']" type="text" size="40" value="'.$deltec_prm_value.'"><br />';
    echo '<label for="deltec_options_'.$deltec_prm_id.'">'.$deltec_prm_label.'</label>';
}


 /*********************************************************************
 * Callback function for the display-full-address field on the deltec settings page
 * 
 * @link
 *
 * @see deltec_register_settings 
 *           /includes/settings-register.php
 * 
 * @param 
 *
 * @return 
 *********************************************************************/
function deltec_callback_show_full_address_checkbox($args) {
    // Get the option for the check box to dispaly the full address from the Display Event Locations for The Events Calendar settings page 
    $options = get_option('deltec_options')['display-full-address'];

    // Create an html checkbox and label to display value of the display full address deltec option
    $deltec_dfahtml = '<input type="checkbox" id="deltec_options_display_full_address" name="deltec_options[display-full-address]" value="1"' . checked( 1, $options['display-full-address'], false ) . '/><br>';
    $deltec_dfahtml .= '<label for="deltec_options_display_full_address">Enable the full address to be displayed underneath the venue/location name within the tooltip.</label>';

    // Eacho out the html for the input tag and the label that will be displayed for the 'Show Full Venue Address Inside Tooltip' checkbox
    echo $deltec_dfahtml;
}
