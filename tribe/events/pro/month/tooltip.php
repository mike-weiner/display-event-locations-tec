<?php
// Exit plugin if it is being accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Get the value of the text-field for the pre-venue-message from the deltec settings page
$deltec_options = get_option('deltec_options');
$tooltip_message = $deltec_options['pre-venue-message'];
?>


<script type="text/html" id="tribe_tmpl_tooltip">
	<div id="tribe-events-tooltip-[[=eventId]]" class="tribe-events-tooltip">
		<h4 class="entry-title summary">[[=title]]</h4>

		<div class="tribe-events-event-body">
			<div class="duration">
				<abbr class="tribe-events-abbr updated published dtstart">[[=dateDisplay]]</abbr>
			</div>


			<!-- **************************************************************** -->
			<!-- If a location is entered with the event, add its name to tooltip -->
			[[ if(venue) { ]]
			<p class="deltec-tribe-events-location"><?php echo $deltec_tooltip_message ?> [[=venue_title]]

			<!-- Check to see if the user wants to dispay the full address below the location name -->
			<?php if ($deltec_display_full_address == 1) {
				$deltec_html = '<br>[[=venue_address]]<br>[[=venue_city]], [[=venue_state]] [[=venue_zip]]</p>';
				echo $deltec_html;
			} else {
				$deltec_html = '</p>';
				echo $deltec_html;
			}
			?>
			[[ } ]]
			<!-- **************************************************************** -->

			
			[[ if(imageTooltipSrc.length) { ]]
			<div class="tribe-events-event-thumb">
				<img src="[[=imageTooltipSrc]]" alt="[[=title]]"/>
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


			<!-- **************************************************************** -->
			<!-- If a location is entered with the event, add its name to tooltip -->
			[[ if(venue) { ]]
			<p class="deltec-tribe-events-location"><?php echo $deltec_tooltip_message ?> [[=venue_title]]

			<!-- Check to see if the user wants to dispay the full address below the location name -->
			<?php if ($deltec_display_full_address == 1) {
				$deltec_html = '<br>[[=venue_address]]<br>[[=venue_city]], [[=venue_state]] [[=venue_zip]]</p><p></p>';
				echo $deltec_html;
			} else {
				$deltec_html = '</p><p></p>';
				echo $deltec_html;
			}
			?>
			[[ } ]]
			<!-- **************************************************************** -->


			[[ if(excerpt.length) { ]]
			<div class="tribe-event-description">[[=raw excerpt]]</div>
			[[ } ]]
			<span class="tribe-events-arrow"></span>
		</div>
	</div>
</script>
