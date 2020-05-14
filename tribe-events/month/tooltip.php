<?php

/**
 *  Exit plugin if it is being accessed directly
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Get the row within the wp_options table for the custom deltec options
$deltec_options = get_option('deltec_options');

// Get the value of the text-field for the pre-venue-message from the deltec settings page
$deltec_tooltip_message = $deltec_options['pre-venue-message'];

// Get the value of the option check-box if the full address should be displayed within the tooltip
$deltec_display_full_address = $deltec_options['display-full-address'];

?>

<script type="text/html" id="tribe_tmpl_tooltip">
	<div id="tribe-events-tooltip-[[=eventId]]" class="tribe-events-tooltip">
		<h4 class="entry-title summary">[[=title]]</h4>

		<div class="tribe-events-event-body">
			<div class="duration">
				<abbr class="tribe-events-abbr updated published dtstart">[[=dateDisplay]] </abbr>
			</div>


			[[ if(venue) { ]]
				<div class = "deltec-tooltip-message">
					<span class = "deltec-tribe-events-location">

					<span class="deltec-location-name-prefix"><?php echo $deltec_tooltip_message ?></span> <span class = "deltec-location-name"> [[=venue_title]] </span>

					<?php if ($deltec_display_full_address == 1) {
						$deltec_html = '<br><span class="deltec-street-address">[[=venue_address]]<br>[[=venue_city]], [[=venue_state]] [[=venue_zip]]<br>[[=venue_country]]</span>';
						echo $deltec_html;
					}
					?>

					</span>
				</div>
			[[ } ]]

			[[ if(imageTooltipSrc.length) { ]]
			<div class="tribe-events-event-thumb">
				<img src="[[=imageTooltipSrc]]" alt="[[=title]]" />
			</div>
			[[ } ]]
			[[ if(excerpt.length) { ]]
			<p class="entry-summary description">[[=raw excerpt]]</p>
			[[ } ]]
			<span class="tribe-events-arrow"></span>
		</div>
	</div>
</script>

<script type="text/html" id="tribe_tmpl_tooltip_featured">
	<div id="tribe-events-tooltip-[[=eventId]]" class="tribe-events-tooltip tribe-event-featured">
		[[ if(imageTooltipSrc.length) { ]]
			<div class="tribe-events-event-thumb">
				<img src="[[=imageTooltipSrc]]" alt="[[=title]]"/>
			</div>
		[[ } ]]

		<h3 class="entry-title summary">[[=raw title]]</h3>

		<div class="tribe-events-event-body">
			<div class="tribe-event-duration">
				<abbr class="tribe-events-abbr tribe-event-date-start">[[=dateDisplay]]</abbr>
			</div>


			[[ if(venue) { ]]
				<div class = "deltec-tooltip-message">
					<span class = "deltec-tribe-events-location">

					<span class="deltec-location-name-prefix"><?php echo $deltec_tooltip_message ?></span> <span class = "deltec-location-name"> [[=venue_title]] </span>

					<?php if ($deltec_display_full_address == 1) {
						$deltec_html = '<br><span class="deltec-street-address">[[=venue_address]]<br>[[=venue_city]], [[=venue_state]] [[=venue_zip]]<br>[[=venue_country]]</span>';
						echo $deltec_html;
					}
					?>

					</span>

					<br><br>
				</div>
			[[ } ]]


			[[ if(excerpt.length) { ]]
			<div class="tribe-event-description">[[=raw excerpt]]</div>
			[[ } ]]
			<span class="tribe-events-arrow"></span>
		</div>
	</div>
</script>
