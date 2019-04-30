=== Display Event Location for The Events Calendar ===
Contributors: vikings412
Donate Link: https://paypal.me/michaelw13?locale.x=en_US
Tags: events, customization, modern-tribe, override, template
Requires at least: 4.6
Tested up to: 5.1.1
Stable tag: 1.0.1
Requires PHP: 5.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

This plugin works with The Events Calendar by Modern Tribe. It changes the popup on the month view to include the event's location within the popup.

== Description ==

This plugin overrides the standard template for the tooltip that is displayed when a user hovers over an event on the month display of The Events Calendar. The name of the event's venue/location that is entered with the event will be displayed under the date and time that the event occurs. All of the other elements of the template remain unchanged.

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload the plugin files to the plugins directory, or install the plugin through the WordPress Plugins panel directly.
1. Activate the plugin through the Plugins panel in the WordPress Admin Backend
1. Disable 'The Events Calendar' or 'The Events Calendar Pro'
1. Re-Enable 'The Events Calendar' or 'The Events Calendar Pro'

== Frequently Asked Questions ==

= I have activated the plugin, but the tooltip still looks the same. Why does the tooltip not list the event's location? =

Make sure that the plugin 'Display Event Locations for The Events Calendar' is enabled in the backend. Once it is enabled and active, deactivate the plugin for 'The Events Calendar' or 'The Events Calendar Pro' and then re-activate it. When you hover over an event on the month view, the tooltip should now display the event's location name.

= Does this plugin display anything other than the name of the event's location? =

No. At this time, this plugin only adds the name of the event's location/venue to the tooltip.

= What plugins are required for these changes to take effect? =

Your website must use 'The Events Calendar 4.8' or 'The Events Calendar Pro 4.8' or higher for this plugin to correctly modify the tooltip.

= Does this plugin change the tooltip for both regular and featured events? =

Yes, this plugin will change the tooltip for both regular and featured events.

= Does this plugin work for events created with the block editor? =

Yes. This plugin will modify the tooltip for events created with the classic/standard editor or the block editor for both the standard and pro versions of 'The Events Calendar'.

== Screenshots==

1. This is what the tooltip for a regular event will look like after activating this plugin.
2. This is what the tooltip for a featured event will look like after activating this plugin.

== Changelog ==

= 1.0.1 =
* FIXED - Adjusted readme.txt to display screenshots

= 1.0 =
* Released on April 29, 2019
* Initial release

== Upgrade Notice ==

= 1.0.1 =
Fixed typos in readme.txt

= 1.0 =
Initial release!

== Arbitrary section ==

=== References: ===
1. https://theeventscalendar.com/support/forums/topic/altering-event-tooltip-display-displaying-additional-fields-in-tooltips/
1. https://theeventscalendar.com/support/forums/topic/override-templates-via-custom-plugin/
1. https://support.theeventscalendar.com/153124-Themers-Guide

=== CSS Classes: ===
* tribe-events-location - Within the tooltip/popup the text 'Location: Event-Location-Here' is wrapped in this class. Use this to style the information within the popup.
