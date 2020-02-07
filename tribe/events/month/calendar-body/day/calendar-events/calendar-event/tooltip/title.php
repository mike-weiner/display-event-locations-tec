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
// If the chekcbox is set -> assign $options a value of 1
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
		// phpcs:ignore
		echo $event->title;
		?>
	</a>
</h3>

<!-- Add DELTEC Tooltip Message and Full Venue Address -->
<p class="deltec-tribe-events-location tribe-events-calendar-month__calendar-event-tooltip-description">
	<!-- Check to determine if the current event being hovered over has an address assigned to it -->
	<!-- If no address (and thus no vuene) exists, then nothing will be added to the tooltip -->
	<?php
	// If the venue exists, add the user defined tooltip message and the venue name to the tooltip
	if ( tribe_address_exists( esc_url( $event->permalink ) ) ) {
		$deltec_venue_name = tribe_get_venue( esc_url( $event->permalink ) );

		$deltec_tooltip_message_and_venue_name = '' . $deltec_tooltip_message . ' ' . $deltec_venue_name . '<br>';
		echo $deltec_tooltip_message_and_venue_name;
	}
	?>

	<!-- Check to see if the user wants to dispay the full address below the location name -->
	<?php if ($deltec_display_full_address == 1) {
		// Get the full address of the venue assigned to the event and display it under the tooltip message and venue name
		$deltec_location_html = tribe_get_full_address(esc_url( $event->permalink ));
		echo $deltec_location_html;
	} else {
		// If the user does not want to display the full address, don't add anything to the HTML output
		$deltec_location_html = '';
	}
	?>
</p>