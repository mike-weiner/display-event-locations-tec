<?php

// Exit file if it is being accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Validate & Clean settings fields on the deltec settings page
function deltec_validate_options($input)
{
    if (isset ($input['pre-venue-message'])) {
        $input['pre-venue-message'] = sanitize_text_field($input['pre-venue-message']); // Sanitize the pre-venue-message text field to make sure that only plain text is being saved into the database
    }

    return $input;
}