<?php
?>

<script type="text/html" id="tribe_tmpl_tooltip">
	<div id="tribe-events-tooltip-[[=eventId]]" class="tribe-events-tooltip">
		<h4 class="entry-title summary">[[=title]]</h4>

		<div class="tribe-events-event-body">
			<div class="duration">
				<abbr class="tribe-events-abbr updated published dtstart">[[=dateDisplay]] </abbr>
			</div>
			[[ if(venue) { ]]
			<p class="tribe-events-location">Location: [[=venue]]</p>
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
				<img src="[[=imageTooltipSrc]]" alt="[[=title]]" \/>
			<\/div>
		[[ } ]]

		<h3 class="entry-title summary">[[=raw title]]<\/h3>

		<div class="tribe-events-event-body">
			<div class="tribe-event-duration">
				<abbr class="tribe-events-abbr tribe-event-date-start">[[=dateDisplay]] <\/abbr>
			<\/div>

			[[ if(venue) { ]]
			<p class="tribe-events-location">Location: [[=venue]]</p>
			<br>
			[[ } ]]

			[[ if(excerpt.length) { ]]
			<div class="tribe-event-description">[[=raw excerpt]]<\/div>
			[[ } ]]
			<span class="tribe-events-arrow"><\/span>
		<\/div>
	<\/div>
</script>
