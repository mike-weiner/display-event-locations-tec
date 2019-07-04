# Display Event Location for The Events Calendar
Contributors: [vikings412](https://profiles.wordpress.org/vikings412/) <br>
Donate Link: https://paypal.me/michaelw13?locale.x=en_US <br>
Tags: events, customization, modern-tribe, override, template <br>
Requires at least: 4.6 <br>
Tested up to: 5.1.1 <br>
Stable tag: 1.1 <br>
Requires PHP: 5.4 <br>
License: GPLv2 or later <br>
License URI: https://www.gnu.org/licenses/gpl-2.0.html <br>

This plugin works with The Events Calendar by Modern Tribe. It changes the popup on the month view to include the event's location within the popup.

## Description

This plugin overrides the standard template for the tooltip that is displayed when a user hovers over an event on the month display of The Events Calendar. The name of the event's venue/location that is entered with the event will be displayed under the date and time that the event occurs. All of the other elements of the template remain unchanged.

## Installation

This section describes how to install the plugin and get it working.

1. Upload the plugin files to the plugins directory, or install the plugin through the WordPress Plugins panel directly.
2. Activate the plugin through the Plugins panel in the WordPress Admin Backend

## Frequently Asked Questions

### I have activated the plugin, but the tooltip still looks the same. Why does the tooltip not list the event's location?

The changes can take about a minute to be reflected.

First, make sure that the plugin 'Display Event Locations for The Events Calendar' is enabled in the backend.

If you click on an event within the calendar and then click the "< All Events" link to go back to the calendar, the changes should then be reflected.

If you still aren't seeing the location displayed within the tooltip, you can also try viewing your calendar in a different browser or try clearing your browser's cache and then viewing your calendar again.

If you still cannot figure out why the location is not displaying, feel free to submit a support ticket and we will be more than happy to help you!

### Does this plugin display anything other than the name of the event's location?

No. At this time, this plugin only adds the name of the event's location/venue to the tooltip.

### What plugins are required for these changes to take effect?

Your website must use 'The Events Calendar 4.8' or 'The Events Calendar Pro 4.8' or higher for this plugin to correctly modify the tooltip.

### Does this plugin change the tooltip for both regular and featured events?

Yes, this plugin will change the tooltip for both regular and featured events.

### Does this plugin work for events created with the block editor?

Yes. This plugin will modify the tooltip for events created with the classic/standard editor or the block editor for both the standard and pro versions of 'The Events Calendar'.

## Screenshots

1. This is what the tooltip for a regular event will look like after activating this plugin.
2. This is what the tooltip for a featured event will look like after activating this plugin.

## Changelog

### 1.1
* Released on May 12, 2019
* FIXED - Deactivation/Reactivation Bug
* IMPLEMENTED - tribe_events_template_data_array() Hook
* MISC. - All single-event.php Override Files Removed

### 1.0.1
* FIXED - Adjusted readme.txt to display screenshots
* CHANGED - Changed CSS Class from 'tribe-events-location' to 'deltec-tribe-events-location'
* MISC. - Added Plugin Logo Assets

### 1.0 🎉
* Released on April 29, 2019
* Initial release

## Upgrade Notice

### 1.1
* Version 1.1 addresses and fixes the need to deactivate and then reactivate the Modern Tribe Events System plugin. Feel free to activate our plugin and go about your business!

### 1.0.1
* Fixed typos in readme.txt
* Added Logos
* Changed CSS Class from 'tribe-events-location' to 'deltec-tribe-events-location'

### 1.0 🎉
* Initial release!

## Arbitrary section

### CSS Classes:
* **deltec-tribe-events-location** - Within the tooltip/popup the text 'Location: Event-Location-Here' is wrapped in this class. Use this to style the information within the popup.
