<?php

/**
 *  Exit plugin if it is being accessed directly
 */
if (! defined('ABSPATH')) {
    exit;
}

/**
 * Callback function for tooltip settings section on the deltec settings page
 * 
 * @see deltec_register_settings() located at /includes/settings-register.php
 */
function deltec_callback_settings_section_tool_tip()
{
    echo '<p>Use the text field below to modify the message/phrase that is displayed before the event venue/location in the tooltip that is displayed on hover for the user.</p>';
}

/**
 * Callback function for the pre-venue-message field on the deltec settings page
 * 
 * @see deltec_register_settings() located at /includes/settings-register.php
 */
function deltec_callback_pre_venue_message_text_field($args)
{
    // Get the row within the wp_options table for the custom deltec options
    $options = get_option('deltec_options', deltec_options_default());

    // Parse the id, label, and value fields for the html input tag from the settings field
    $deltec_prm_id = isset($args['id']) ? $args['id'] : '';
    $deltec_prm_label = isset($args['label']) ? $args['label'] : '';
    $deltec_prm_value = isset($options[$deltec_prm_id]) ? sanitize_text_field($options[$deltec_prm_id]) : '';

    // Echo out the html for the input tag and the label that will be displayed for the 'Tooltip Message Before Venue/Location Name' text field
    echo '<input id="deltec_options_' . esc_attr($deltec_prm_id) . '" name="deltec_options[' . esc_attr($deltec_prm_id) . ']" type="text" size="40" value="' . esc_attr($deltec_prm_value) . '"><br />';
    echo '<label for="deltec_options_' . esc_attr($deltec_prm_id) . '">' . esc_html($deltec_prm_label) . '</label>';
}

/**
 * Callback function for the display-full-address field on the deltec settings page
 * 
 * @see deltec_register_settings() located at /includes/settings-register.php
 */
function deltec_callback_show_full_address_checkbox($args)
{
    // Get the option for the check box to display the full address from the Display Event Location for The Events Calendar settings page 
    $options = get_option('deltec_options');

    // If the checkbox is not set or not checked -> assign $options a value of 0
    // If the checkbox is set -> assign $options a value of 1
    $options = empty($options['display-full-address']) ? 0 : 1;

    // Get the allowed HTML tags and attributes from wp_kses_post and extend with checkbox support
    $allowed_html = wp_kses_allowed_html('post');
    $allowed_html['input'] = array(
        'type'     => array(),
        'id'       => array(),
        'name'     => array(),
        'value'    => array(),
        'checked'  => array(),
    );
    $allowed_html['label'] = array(
        'for' => array(),
    );

    // Create an html checkbox and label to display value of the display full address deltec option
    $deltec_dfahtml = '<input type="checkbox" id="deltec_options_display_full_address" name="deltec_options[display-full-address]" value="1" ' . checked(1, $options, false) . '/><br>';
    $deltec_dfahtml .= '<label for="deltec_options_display_full_address">' . esc_html__('Enable the full address to be displayed underneath the venue/location name within the tooltip.', 'display-event-locations-tec') . '</label>';

    // Echo out the html for the input tag and the label that will be displayed for the 'Show Full Venue Address Inside Tooltip' checkbox
    echo wp_kses($deltec_dfahtml, $allowed_html);
}
