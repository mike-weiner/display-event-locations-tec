<?php

// Exit file if it is being accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Callback function for tooltip settings section on the deltec settings page
function deltec_callback_settings_section_tool_tip() {
    echo '<p>Use the text field below to modify the message/phrase that is displayed before the event venue/location in the tooltip that is displayed on hover for the user.</p>';
}

// Callback function for the pre-venue-message field on the deltec settings page
function deltec_callback_pre_venue_message_text_field($args) {
    $options = get_option('deltec_options', deltec_options_default());

    $deltec_prm_id = isset($args['id']) ? $args['id'] : '';
    $deltec_prm_label = isset($args['label']) ? $args['label'] : '';
    $deltec_prm_value = isset($options[$deltec_prm_id]) ? sanitize_text_field($options[$deltec_prm_id]) : '';

    echo '<input id="deltec_options_'.$deltec_prm_id.'"name="deltec_options['.$deltec_prm_id.']" type="text" size="40" value="'.$deltec_prm_value.'"><br />';
    echo '<label for="deltec_options_'.$deltec_prm_id.'">'.$deltec_prm_label.'</label>';
}

// Callback function for the display-full-address field on the deltec settings page
function deltec_callback_show_full_address_checkbox($args) {
    $options = get_option('deltec_options')['display-full-address'];
         
    $deltec_dfahtml = '<input type="checkbox" id="deltec_options_display_full_address" name="deltec_options[display-full-address]" value="1"' . checked( 1, $options['display-full-address'], false ) . '/><br>';
    $deltec_dfahtml .= '<label for="deltec_options_display_full_address">Enable the full address to be displayed underneath the venue/location name within the tooltip.</label>';
         
    echo $deltec_dfahtml;
}
