<?php
/**
 * Month Single Event
 * This file contains one event in the month view
 */

// Exit file if it is being accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

global $post;

$day      = tribe_events_get_current_month_day();
$event_id = "{$post->ID}-{$day['date']}";
$link     = tribe_get_event_link( $post );
$title    = get_the_title( $post );

// Additional Array and Information Created to Display the Venue Information in the Tooltip on Hover Over by the User
$venue = array();
$getvenue = tribe_get_venue();
$venue['venue'] = $getvenue;
?>

<div id="tribe-events-event-<?php echo esc_attr( $event_id ); ?>" class="<?php tribe_events_event_classes() ?>" data-tribejson='<?php echo esc_attr( tribe_events_template_data( $post, $venue ) ); ?>'>
	<h3 class="tribe-events-month-event-title entry-title summary"><a href="<?php echo esc_url( $link ) ?>" class="url"><?php echo $title ?></a></h3>
</div><!-- #tribe-events-event-# -->
