<?php
$deltec_options = get_option('deltec_options');

$deltec_tooltip_message = $deltec_options['pre-venue-message'];

// 0 = Don't Display, 1 = Display
$deltec_display_full_address = empty(get_option('deltec_options')['display-full-address']) ? 0 : 1;
?>

<p class="deltec-tooltip-message tribe-events-calendar-month__calendar-event-tooltip-description">
    <span class= "deltec-tribe-events-location">

        <?php
            $deltec_venue_name = tribe_get_venue();

            if ( ! empty( $deltec_venue_name ) ) {
                $deltec_tooltip_message_and_venue_name = '<span class= "deltec-location-name-prefix">' . esc_html( $deltec_tooltip_message ) . '</span><span class= "deltec-location-name"> ' . esc_html( $deltec_venue_name ) . '</span><br>';
                echo $deltec_tooltip_message_and_venue_name;
            }
        ?>

        <?php 
            if ( tribe_address_exists() == 1 && $deltec_display_full_address == 1 ) {
                $deltec_location_html = '<span class= "deltec-street-address">' . tribe_get_full_address() . '</span>';
                echo $deltec_location_html;
            } else {
              $deltec_location_html = '';
            }
        ?>
    </span>
</p>