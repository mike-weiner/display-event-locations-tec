<?php
/**
 * View: Month View - Single Event Tooltip Title
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/v2/month/calendar-body/day/calendar-events/calendar-event/tooltip/title.php
 *
 * See more documentation about our views templating system.
 *
 * @link {INSERT_ARTICLE_LINK_HERE}
 *
 * @version 5.0.0
 *
 * @var WP_Post $event The event post object with properties added by the `tribe_get_event` function.
 *
 * @see tribe_get_event() For the format of the event object.
 */

 // Get the row within the wp_options table for the custom deltec options
$deltec_options = get_option('deltec_options');

// Get the value of the text-field for the pre-venue-message from the deltec settings page
$deltec_tooltip_message = $deltec_options['pre-venue-message'];

// If the checkbox is not set or not checked -> assign $options a value of 0
// If the checkbox is set -> assign $options a value of 1
$deltec_display_full_address = empty(get_option('deltec_options')['display-full-address']) ? 0 : 1;
?>

<h3 class="tribe-events-calendar-month__calendar-event-tooltip-title tribe-common-h7">
	<a
		href="<?php echo esc_url( $event->permalink ) ?>"
		title="<?php echo esc_attr( $event->title ); ?>"
		rel="bookmark"
		class="tribe-events-calendar-month__calendar-event-tooltip-title-link tribe-common-anchor-thin"
	>
		<?php
			echo $event->title;
		?>
	</a>
</h3>

<p class="deltec-tooltip-message tribe-events-calendar-month__calendar-event-tooltip-description">
	<span class= "deltec-tribe-events-location">
		
		<?php
		if ( tribe_address_exists( esc_url( $event->permalink ) ) ) {
			$deltec_venue_name = tribe_get_venue( esc_url( $event->permalink ) );

			$deltec_tooltip_message_and_venue_name = '<span class= "deltec-location-name-prefix">' . $deltec_tooltip_message . '</span><span class= "deltec-location-name"> ' . $deltec_venue_name . '</span><br>';
			echo $deltec_tooltip_message_and_venue_name;
		}
		?>

		<?php if ($deltec_display_full_address == 1) {
			$deltec_location_html = '<span class= "deltec-street-address">' . tribe_get_full_address(esc_url( $event->permalink )) . '</span>';
			echo $deltec_location_html;
		} else {
			$deltec_location_html = '';
		}
		?>
	</span>
</p>