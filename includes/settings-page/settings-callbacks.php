<?php

// Exit file if it is being accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

//Callback function for tooltip settings section on the deltec settings page
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

