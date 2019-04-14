# Display Event Venue on Monthly Calendar Tooltip
Add the venue/location for an event to the tooltip that is displayed when a user hovers over an event in the month view.

## Instructions to Activate:
1. Download .zip archive of this repository
2. Load this .zip into your Wordpress website using the plugin uploader on the back-end
3. Activate this plugin
4. Deactivate & Re-Activate The Events Calendar plugin to have the changes be reflected

## CSS Class:
- To chagne the design of "Location: EVENT-LOCATION-HERE" ---> USE the CSS Class:
```CSS
tribe-events-location
```

## Folder Structure
- Override templates for events created with the standard editor for The Events Calendar Plugin
```
/tribe-events/month/
```
- Override templates for events created with the standard editor for The Events Calendar <strong>Pro</strong> Plugin
```
/tribe-events/pro/month/
```
- Override templates for events created with the block editor for The Events Calendar Plugin
```
/tribe/events/month/
```
- Override templates for events created with the block editor for The Events Calendar <strong>Pro</strong> Plugin
```
/tribe/events/pro/month/
```

## Notice:
<strong>Note:</strong> You must de-activate The Events Calendar plugin itself after disabling or enabling this plugin for the changes to be reflected on the front-end.

## References:
1. https://theeventscalendar.com/support/forums/topic/altering-event-tooltip-display-displaying-additional-fields-in-tooltips/
2. https://theeventscalendar.com/support/forums/topic/override-templates-via-custom-plugin/
3. https://support.theeventscalendar.com/153124-Themers-Guide
