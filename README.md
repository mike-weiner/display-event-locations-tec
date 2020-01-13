# Display Event Location for The Events Calendar
[![Build Status](https://travis-ci.com/mike-weiner/display-event-locations-tec.svg?branch=master)](https://travis-ci.com/mike-weiner/display-event-locations-tec)
![WordPress Plugin Downloads](https://img.shields.io/wordpress/plugin/dt/display-event-locations-tec)
![Wordpress Plugin Activations](https://img.shields.io/wordpress/plugin/installs/display-event-locations-tec)
![WordPress Plugin Version](https://img.shields.io/wordpress/plugin/v/display-event-locations-tec)
![GitHub code size in bytes](https://img.shields.io/github/languages/code-size/mike-weiner/display-event-locations-tec)


Contributors: [vikings412](https://profiles.wordpress.org/vikings412/) <br>
Donate Link: https://paypal.me/michaelw13 <br>
Tags: events, customization, modern-tribe, override, template <br>
Requires at least: 4.6 <br>
Tested up to: 5.3.2 <br>
Stable tag: 2.2 <br>
Requires PHP: 5.6 <br>
License: GPLv2 or later <br>
License URI: https://www.gnu.org/licenses/gpl-2.0.html <br>

This plugin works with The Events Calendar by Modern Tribe. It changes the popup on the month view to include the event's location within the popup.

## Description

This plugin overrides the standard template for the tooltip that is displayed when a user hovers over an event on the month display of The Events Calendar. The name of the event's venue/location that is entered with the event will be displayed under the date and time that the event occurs. The full street address for the location can also be enabled to be displayed directly underneath the name of the venue of the event. The location name and address are pulled in from the events system itself for each individual event. All of the other elements of the tooltip remain unchanged.

## Installation

This section describes how to install the plugin and activate it on your Wordpress installation. 

### From the WordPress Plugin Directory

The official Display Event Location for The Events Calendar WordPress Plugin can be found at: [https://wordpress.org/plugins/display-event-locations-tec/](https://wordpress.org/plugins/display-event-locations-tec/).

The plugin can be downloaded and installed right from your Wordpress administration area by going to `Plugins > Add New` and searching for "Display Event Location for The Events Calendar by Weiner" and clicking "Install" and then by clicing the blue "Activate" after the installation has completed.

### From the Github Repository

Go to the [releases](https://github.com/mike-weiner/display-event-locations-tec/releases) section of the repository and download the display-event-locations-tec.zip from the most recent release.

Once you have downloaded the `display-event-locations-tec.zip` from the releases section of this repo sign into the backend of your Wordpress website. From your WordPress administration panel, go to `Plugins > Add New` and click the gray `Upload Plugin` button at the top of the page. Select the `display-event-locations-tec.zip` file to upload from your machine when prompted.

Wordpress will install the plugin. Once the installation is complete, you will be able to activate the plugin and begin using it!

Enjoy! If you have any questions or issues please open a [new issue on the Github repository](https://github.com/mike-weiner/display-event-locations-tec/issues) or [submit a support ticket](https://wordpress.org/support/plugin/display-event-locations-tec/) on the Wordpress Plugin directory listing for the Display Event Location for The Events Calendar plugin.

## Frequently Asked Questions

### I have activated the plugin, but the tooltip still looks the same. Why does the tooltip not list the event's location and/or address?

First, make sure that the plugin 'Display Event Locations for The Events Calendar' is enabled in the backend.

If you click on an event within the calendar and then click the `< All Events` link to go back to the calendar, the changes should then be reflected.

If you still aren't seeing the location displayed within the tooltip, you can also try viewing your calendar in a different browser or try clearing your browser's cache and then viewing your calendar again.

If the changes to the tooltip are still not present, try updating an existing event or creating a new test event. Save and publish the event. Then, take a peak at your calendar. The changes to the tooltip should now be reflected!

If you still cannot figure out why the location is not displaying, feel free to submit a support ticket and we will be more than happy to help you!

> TLDR; Sometimes a small change is difficult. Give it a few minutes, and if you get frustrated we are here to help you! [Submit a support ticket](https://wordpress.org/support/plugin/display-event-locations-tec/) on Wordpress.org or [open a new issue](https://github.com/mike-weiner/display-event-locations-tec/issues) on the Github repository and we'll help get you up and running! :)

### Does this plugin display anything other than the name of the event's location?

Yes. You can choose to display just the name of the location or the name of the location and the full address of the location underneath. See the [screenshots](https://wordpress.org/plugins/display-event-locations-tec/#screenshots) for all of the different ways you can display information within the tooltip.

See the FAQ titled "How do I display the street address underneath the location name within the looptip?" (below) to learn how to enanle the street address within the tooltip.

### How do I change the phrase "Location: " that is diplayed before the name of an event's venue/location within the tooltip?

Hover over "Settings" in the left-hand sidebar within the administration area of your Wordpress installation. Click on "Display Event Locations for The Events Calendar" from the flyout that appears. 

Once the page loads, click the edit the text within the `Tooltip Message Before Venue/Location Name` textbox.

Once the you have edited the message to what you would like, click the blue "Save Changes" button. 

Once the page reloads, scroll to the bottom of the page and under the "Preview Tooltip" area, the fake tooltip should display your custom message before the event's venue/location name.

### How do I display the street address underneath the location name within the looptip?

Hover over "Settings" in the left-hand sidebar within the administration area of your Wordpress installation. Click on "Display Event Locations for The Events Calendar" from the flyout that appears. 

Once the page loads, click the checkbox for the `Show Full Venue Address Inside Tooltip` option. Once the checkbox is selected, click the blue "Save Changes" button. 

Once the page reloads, scroll to the bottom of the page and under the "Preview Tooltip" area, the fake tooltip should display the location and fake street address underneath. 

### How do I change the name and/or street address for event locations? 

This plugin uses the location/venue name and address that is entered within the [Modern Tribe Event System](https://theeventscalendar.com/product/wordpress-events-calendar/) itself. To chagne the name or street address of an event location/venue hover over `Events` in the admininstration sidebar and select `Venue` from the flyout that appears. 

Then select the location that you wish to change the name or address of. Once the page loads you will be able to change the name and address. Once you finish making updates, clikc the blue `Update` button. 

### What plugins are required for these changes to take effect?

Your website must use 'The Events Calendar 4.8' or 'The Events Calendar Pro 4.8' or higher for this plugin to correctly modify the tooltip.

### Does this plugin change the tooltip for both regular and featured events?

Yes, this plugin will change the tooltip for both regular and featured events.

### Does this plugin work for events created with the block editor?

Yes! This plugin will modify the tooltip for events created with the the block editor for either the standard or pro versions of _The Events Calendar_.

### I am having issues with the tooltip not showing the venue name and/or address with events created with the block editor. Why?

As great as the block editor is, it can cause issues sometimes. For events that you create with the block editor, make sure a venue or location is set for each event! Make sure to double check any events that the tooltip is not working on! Sometime they are removed from the event. If any issues persit, [let us know](https://wordpress.org/support/plugin/display-event-locations-tec/) and we will take a look under the hood!

## Screenshots

1. The settings page for the Display Event Locations for The Events Calendar plugin. This is where you can change what is displayed on your tooltip when a user hovers over an event on your website's calendar.
2. This is what the tooltip for a regular event will look like after activating this plugin with only the location name enabled.
3. This is what the tooltip for a regular event will look like after activating this plugin with the location name and street address enabled.
4. This is what the tooltip for a featured event will look like after activating this plugin with only the location name enabled.
5. This is what the tooltip for a featured event will look like after activating this plugin with the location name and street address enabled.

## Changelog

### 2.2 
* Released on January 13, 2020
* Added: All code has been cleaned and documented! Rejoice!
* Added: All function and variable names now use the global plugin prefix: $deltec_
* Added: Tooltip overrides for events created with the block editor has been re-enabled. 
* Added: deltec_get_tec_plugin_version() has been added to get the version of the current version of The Events Calendar or The Events Calendar Pro that is installed and activated in preparation for The Events Calendar version 5.0!
* Notice: Modern Tribe has announced that verion 5.0 will be released sometime this month (it is nearing the end of its beta!). We are working to get support for version 5.0 ready for launch. Please be aware that if you update to version 5.0 your tooltip will not be the same as the new version brings an entirely new look! We will work to get support for version 5.0 out ASAP! Keep your eye out for an update. 
* Edited: /includes/settings-page/admin-page.php
* Edited: /includes/settings-page/settings-page.php
* Edited: /includes/settings-page/settings-register.php
* Edited: /includes/settings-page/settings-callbacks.php
* Edited: /includes/settings-page/settings-validate.php
* Edited: /tribe-events/month/tooltip.php
* Edited: plugin.php
* Edited: README.md
* Removed: /tribe/events/month/tooltip.php
* Removed: /tribe/events/month/pro/tooltip.php
* Removed: /tribe-events/month/pro/tooltip.php

### 2.1
* Released on January 8, 2020
* Added: The event street address can now be displayed within the tooltip underneath the location name.
* Added: Uninstallation Hook (Your settings for this plugin will now be deleted from the wp_ database when you uninstall this plugin.)
* Added: An additional line break has been added to featured event tooltips to make things more readable!
* Added: Travis CI has been implemented to automatically check for any syntax and compatibility issues with modern and common versions of PHP. 
* Added: New screenshots of the plugin to show the new feature of being able to add the street address to the tooltip.
* Edited: /includes/settings-page/settings-page.php
* Edited: /includes/settings-page/settings-register.php
* Edited: /includes/settings-page/settings-callbacks.php
* Edited: /includes/settings-page/settings-validate.php
* Edited: /tribe/events/month/tooltip.php
* Edited: /tribe/events/month/pro/tooltip.php
* Edited: /tribe-events/month/tooltip.php
* Edited: /tribe-events/month/pro/tooltip.php
* Edited: /assets/screenshot1.png
* Edited: /assets/screenshot2.png
* Edited: /assets/screenshot3.png
* Edited: /assets/screenshot4.png
* Edited: /assets/screenshot5.png
* Edited: plugin.php
* Edited: README.md
* Tested: Support up to WordPress 5.2.3 has been tested and confirmed
* Tested: Support up to PHP 7.4 has been tested and confirmed
* Tested: Minimum PHP Version is now set at 5.6

### 2.0.1
* Released on September 5, 2019
* Added: Support for WordPress 5.3.2 has been tested and confirmed

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
### 2.2
A second update in a week? Yessir! Code has been cleaned and documented. Support for tooltip customizations for events created with the block editor has been restored. Excess files have been removed. (Post holiday workout anyone?) And we are preparing for The Events Claendar version 5.0! A busy couple of weeks ahead!

### 2.1
Happy New Year!! Version 2.1 is a small, powerful update to welcome the new decade. You can now opt to display an event's location underneath the location name within the tooltip! Support for WordPress 5.2.3 has also been added. 

### 2.0.1
Version 2.0.1 is a very minor update. Support with WordPress 5.2.3 has been tested and confirmed. Thank you for your support!

### 2.0
Version 2.0 is a major quality of life overhaul. There are too many small changes here and there to cover. Let me give you a quick-ish overview. You can now quickly change the message that is displayed on the tooltip when a user hovers over an event on your website's calendar. This is done through the Display Event Locations for The Events Calendar settings page. You can find this within the Settings area of your site's backend as a sub-menu page of the Settings dropdown/flyout. Unneeded code & increased security measures have been implemented. All of our saved settings are now removed upon you uninstalling our plugin from your website. We have also done extensive testing with the latest versions of WordPress, The Events Calendar, and PHP 7.0. All human typos have also been dealt with. Thank you for sticking with me! You should notice lots of little improvements as you use the plugin. Please let me know what features you would like to see next!  

### 1.1
Version 1.1 addresses and fixes the need to deactivate and then reactivate the Modern Tribe Events System plugin. Feel free to activate our plugin and go about your business!

### 1.0.1
Fixed typos in readme.txt. Added Logos. Changed CSS Class from `tribe-events-location` to `deltec-tribe-events-location`.

### 1.0 🎉
Initial release!

## Arbitrary section

### CSS Classes:
* **deltec-tribe-events-location** - Within the tooltip/popup the text 'Location: Event-Location-Here' is wrapped in this class. Use this to style the information within the popup.

### Github Repository

The Github Repository can be found here: https://github.com/mike-weiner/display-event-locations-tec.

### References:
Below are resources and references that were used to help develop parts of this plugin:

1. [https://docs.theeventscalendar.com/reference/hooks/tribe_events_template_data_array/](https://docs.theeventscalendar.com/reference/hooks/tribe_events_template_data_array/)
2. [https://theeventscalendar.com/support/forums/topic/altering-event-tooltip-display-displaying-additional-fields-in-tooltips/](https://theeventscalendar.com/support/forums/topic/altering-event-tooltip-display-displaying-additional-fields-in-tooltips/)
3. [https://theeventscalendar.com/support/forums/topic/override-templates-via-custom-plugin/](https://theeventscalendar.com/support/forums/topic/override-templates-via-custom-plugin/)
4. [https://support.theeventscalendar.com/153124-Themers-Guide](https://support.theeventscalendar.com/153124-Themers-Guide)
5. [https://gist.github.com/cliffordp/b76421f2490a8b8995493f203e11b331](https://gist.github.com/cliffordp/b76421f2490a8b8995493f203e11b331)
6. [https://gist.github.com/cliffordp/9b8d60d7983af87c3656166766e7cdf0](https://gist.github.com/cliffordp/9b8d60d7983af87c3656166766e7cdf0)
