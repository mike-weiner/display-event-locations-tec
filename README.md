# Add Event Venue to Month View Tooltip - The Events Calendar Extension
Contributors: vikings412 <br>
Tags: events, customization, modern-tribe, override, template <br>
Requires at least: 4.6 <br>
Tested up to: 5.1.1 <br>
Stable tag: 1.0 <br>
Requires PHP: 5.4 or later <br>
License: GPLv2 or later <br>
License URI: https://www.gnu.org/licenses/gpl-2.0.html <br>

This plugin overrides the template for the tooltip on the month view of The Events Calendar to include the event's location in the tooltip.

## Description

This plugin overrides the standard template for the tooltip that is displayed when a user hovers over an event on the month display of The Events Calendar. The name of the event's venue/location that is entered with the event will be displayed under the date and time that an event occurs. All of the other elements of the template remain unchanged.

## Installation

This section describes how to install the plugin and get it working.

1. Upload the plugin files to the `/wp-content/plugins/tribe-extension-venue-on-tooltip/` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Disable 'The Events Calendar' or 'The Events Calendar Pro'
4. Re-Enable 'The Events Calendar' or 'The Events Calendar Pro'

## Frequently Asked Questions 

#### I have activated the plugin, but the tooltip still looks the same. Why does the tooltip not list the event's location? 

Make sure that the plugin 'Add Event Venue to Month View Tooltip - The Events Calendar Extension' is enabled in the backend. Once it is enabled and active, deactivate the plugin for 'The Events Calendar' or 'The Events Calendar Pro' and then re-enable it. When you hover over an event on the month view, the tooltip should now display the event's location name.

#### What plugins are required for these changes to take effect? 

Your website must use 'The Events Calendar 4.8' or 'The Events Calendar Pro 4.8' or later for Add Event Venue to Month View Tooltip - The Events Calendar Extension to correctly modify the tooltip.

#### Does this plugin change the tooltip for both regular and featured events? 

Yes, this plugin will change the tooltip for both regular and featured events.

#### Does this plugin display anything other than the name of the event's location? 

No. At this time, this plugin only adds the name of the event's location/venue to the tooltip.

#### Does this plugin work for events created with the block editor? 

Yes. This plugin will modify the tooltip for events created with the classic/standard editor or the block editor for both the standard and pro versions of 'The Events Calendar'.

## Screenshots

1. This is what the tooltip for a regular event will look like after activating this plugin.
2. This is what the tooltip for a featured event will look like after activating this plugin.

## Changelog 

### 1.0 🎉 
* Released on April 11, 2019
* Initial release

## Upgrade Notice 

### 1.0 🎉
Initial release!

## Arbitrary section

### References:
1. https://theeventscalendar.com/support/forums/topic/altering-event-tooltip-display-displaying-additional-fields-in-tooltips/
2. https://theeventscalendar.com/support/forums/topic/override-templates-via-custom-plugin/
3. https://support.theeventscalendar.com/153124-Themers-Guide

### CSS Class:
To target the design of "Location: EVENT-LOCATION-HERE" ---> USE the CSS Class: tribe-events-location
