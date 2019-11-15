# Display Event Location for The Events Calendar
Contributors: [vikings412](https://profiles.wordpress.org/vikings412/) <br>
Donate Link: https://paypal.me/michaelw13?locale.x=en_US <br>
Tags: events, customization, modern-tribe, override, template <br>
Requires at least: 4.6 <br>
Tested up to: 5.2.4 <br>
Stable tag: 2.0.1 <br>
Requires PHP: 5.4 <br>
License: GPLv2 or later <br>
License URI: https://www.gnu.org/licenses/gpl-2.0.html <br>

This plugin works with The Events Calendar by Modern Tribe. It changes the popup on the month view to include the event's location within the popup.

## Description

This plugin overrides the standard template for the tooltip that is displayed when a user hovers over an event on the month display of The Events Calendar. The name of the event's venue/location that is entered with the event will be displayed under the date and time that the event occurs. All of the other elements of the template remain unchanged.

## Installation

This section describes how to install the plugin and get it working.

1. Upload the plugin files to the plugins directory, or install the plugin through the WordPress Plugins panel directly.
2. Activate the plugin through the Plugins panel in the WordPress administration area.

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

1. The settings page for the Display Event Locations for The Events Calendar plugin. This is where you can change what is displayed on your tooltip when a user hovers over an event on your website's calendar.
2. This is what the tooltip for a regular event will look like after activating this plugin.
3. This is what the tooltip for a featured event will look like after activating this plugin.

## Changelog

### 2.0.1
* Released on September 5, 2019
* Added: Support for WordPress 5.2.3 has been tested and confirmed

### 2.0
* Released on July 8, 2019
* Added: Settings page titled "Display Event Locations for The Events Calendar" has been added as as sub-menu page under the "Setting" section in the backend
* Added: /includes/ 
* Added: /includes/settings-page/admin-menu.php
* Added: /includes/settings-page/settings-page.php
* Added: /includes/settings-page/settings-register.php
* Added: /includes/settings-page/settings-callbacks.php
* Added: /includes/settings-page/settings-validate.php
* Added: Preview of the tooltip text can be found on the settings page
* Added: All setting fields are sanitized before being added to an array that is saved in the wp_ database
* Added: Saved settings & options are now removed from your database upon the uninstalling of the Display Event Locations for The Event Calendar Plugin
* Added: Quick links to our settings page & support page can be found within our plugin listing on the Plugins page. 
* Tested: Support for Wordpress 5.2.2+
* Tested: Support for The Events Calendar 4.9.4+
* Tested: Support for PHP 7.0+
* Fixed: Unneeded HTML has been removed from all tooltip.php files
* Fixed: All typos in commenting of the code have been removed

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

### 2.0.1
* Version 2.0.1 is a very minor update. Support with WordPress 5.2.3 has been tested and confirmed. Thank you for your support!

### 2.0
* Version 2.0 is a major quality of life overhaul. There are too many small changes here and there to cover. Let me give you a quick-ish overview. You can now quickly change the message that is displayed on the tooltip when a user hovers over an event on your website's calendar. This is done through the Display Event Locations for The Events Calendar settings page. You can find this within the Settings area of your site's backend as a sub-menu page of the Settings dropdown/flyout. Unneeded code & increased security measures have been implemented. All of our saved settings are now removed upon you uninstalling our plugin from your website. We have also done extensive testing with the latest versions of WordPress, The Events Calendar, and PHP 7.0. All human typos have also been dealt with. Thank you for sticking with me! You should notice lots of little improvements as you use the plugin. Please let me know what features you would like to see next!  

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
