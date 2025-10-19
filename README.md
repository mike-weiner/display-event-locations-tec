![Deltec Banner](/assets/banner-1544x500.png)

# Display Event Location for The Events Calendar 
![WordPress Plugin Downloads](https://img.shields.io/wordpress/plugin/dt/display-event-locations-tec)
![WordPress Plugin Activations](https://img.shields.io/wordpress/plugin/installs/display-event-locations-tec)
![WordPress Plugin Version](https://img.shields.io/wordpress/plugin/v/display-event-locations-tec)
![GitHub code size in bytes](https://img.shields.io/github/languages/code-size/mike-weiner/display-event-locations-tec)

Contributors: [vikings412](https://profiles.wordpress.org/vikings412/) <br>
Donate Link: https://paypal.me/michaelw13 <br>
Tags: events, customization, modern-tribe, override, template <br>
Requires at least: 5.0.0 <br>
Tested up to: 6.8 <br>
Stable tag: 4.5.0 <br>
Requires PHP: 7.0.0 <br>
License: GPLv2 or later <br>
License URI: https://www.gnu.org/licenses/gpl-2.0.html <br>

This plugin works with The Events Calendar by Modern Tribe. It adds an event's location information to the tooltip on the monthly calendar view.

## Description

This plugin overrides the template for the tooltip that is displayed when a user hovers over an event on the full month calendar view created by The Events Calendar or The Events Calendar Pro plugin. The name of the event's venue/location that is entered with the event will be displayed under the date and time that the event occurs. The full street address for the location can also be displayed. All of the other elements of the tooltip remain unchanged.

[The Events Calendar](https://theeventscalendar.com/product/wordpress-events-calendar/) and [The Events Calendar Pro](https://theeventscalendar.com/product/wordpress-events-calendar-pro/) are WordPress plugins developed by [Modern Tribe](https://tri.be).

The following video explains what this plugin does, how to install it, and how to configure it. Watch it here: [https://www.youtube.com/watch?v=Kv3kx8YvzA4](https://www.youtube.com/watch?v=Kv3kx8YvzA4)

## Installation

This section describes how to install the plugin and activate it on your WordPress installation. 

### From the WordPress Plugin Directory

The official Display Event Location for The Events Calendar WordPress Plugin can be found at: [https://wordpress.org/plugins/display-event-locations-tec/](https://wordpress.org/plugins/display-event-locations-tec/).

The plugin can be downloaded and installed right from your WordPress administration area by going to `Plugins > Add New` and searching for `Display Event Location for The Events Calendar by Weiner` and clicking "Install". Once the installation completes, click the blue "Activate" button to activate the plugin on your website.

### From the Github Repository

Go to the [releases](https://github.com/mike-weiner/display-event-locations-tec/releases) section of the repository and download the `.zip` named `display-event-locations-tec.[version].zip` from the most recent release listed in the repository.

Once you have downloaded the `display-event-locations-tec.[version].zip` from the releases section of the repository sign into the backend of your WordPress website. From your WordPress administration panel, go to `Plugins > Add New` and click the gray `Upload Plugin` button at the top of the page. Select the `display-event-locations-tec.[version].zip` file to upload from your machine when prompted.

WordPress will install the plugin. Once the installation is complete, you will be able to activate the plugin and begin using it. Enjoy! 

If you have any questions or issues please open a [new issue on the Github repository](https://github.com/mike-weiner/display-event-locations-tec/issues) or [submit a support ticket](https://wordpress.org/support/plugin/display-event-locations-tec/) on the WordPress Plugin directory listing for this plugin.

## Frequently Asked Questions

### I have activated the plugin, but the tooltip still looks the same. Why does the tooltip not list the event's location and/or address?

First, make sure that the plugin 'Display Event Location for The Events Calendar' is installed and activated on your website. To check this, click on the `Plugins` option from the left-hand administration sidebar in WordPress. Once the page loads, make sure `Display Event Location for The Events Calendar` is activated. Then try viewing your calendar again to see if the tooltip now displays the location of your events.

If the `Display Event Location for The Events Calendar` plugin is activated and the tooltip still does not show the location of events in your calendar, try navigating your calendar to the next month or backwards to the previous month. Then try hovering over events from that month and see if the tooltip is displaying event locations. 

If you still do not see a location in the tooltip when hovering over events on the monthly calendar, edit the event in question and ensure that a venue is selected. You can do this by selecting `Events > Venues > Add New` from your WordPress administration area. Additional instructions for creating venues can be found here: [https://theeventscalendar.com/knowledgebase/k/venue-and-organizer-pages/](https://theeventscalendar.com/knowledgebase/k/venue-and-organizer-pages/)

If you still aren't seeing the location displayed within the tooltip, you can also try viewing your calendar in a different browser or try clearing your browser's cache and then viewing your calendar again. It is common that the monthly calendar view gets cached in your browser or by your website's hosting service. A clearing of all website and server cache fixes most issues.

If you still cannot figure out why the location is not displaying, feel free to [submit a support ticket](https://wordpress.org/support/plugin/display-event-locations-tec/) and I will be more than happy to help you!

> TLDR; Sometimes a small change is difficult. Give it a few minutes, and if you get frustrated I am here to help you! [Submit a support ticket](https://wordpress.org/support/plugin/display-event-locations-tec/) on wordpress.org or [open a new issue](https://github.com/mike-weiner/display-event-locations-tec/issues) on the Github repository and I will help get you up and running!

### Does this plugin display anything other than the name of the event's venue/location?

Yes! You can choose to display just the name of the location or the name of the location and the full address of the location underneath the location name. See the [screenshots](https://wordpress.org/plugins/display-event-locations-tec/#screenshots) for all of the different ways you can display information within the tooltip.

### How do I change OR remove the phrase "Location: " that is displayed before the name of an event's venue/location within the tooltip?

Hover over `Settings` in the left-hand sidebar within the administration area of your WordPress website. Click on `Display Event Location for The Events Calendar` from the flyout that appears. 

Once the page loads, find the `Tooltip Message Before Venue/Location Name` textbox. If you want to change the phrase that is displayed before the name of an event's venue/location, change the text to what you would like it to display. If you do not want anything to appear before the name of the event's venue/location, simply remove all text from this textbox.

Once the you have made your desired change(s), click the blue `Save Changes` button. 

Once the page reloads, scroll to the bottom of the page. Under the "Preview Tooltip" area, the fake tooltip should display your custom message (or none at all) before the event's venue/location name.

### How do I display the street address underneath the location name within the tooltip?

Hover over `Settings` in the left-hand sidebar within the administration area of your WordPress installation. Click on `Display Event Location for The Events Calendar` from the flyout that appears. 

Once the page loads, click the checkbox for the `Show Full Venue Address Inside Tooltip` option. Once the checkbox is checked, click the blue `Save Changes` button. 

Once the page reloads, scroll to the bottom of the page. Under the "Preview Tooltip" area, the fake tooltip should display both the location and fake street address underneath.

### How do I change the font size of the event venue/location name and/or street address text within the tooltip?

A CSS class system can be used for greater control of the stylization of the elements added to the tooltip by this plugin.

To change the font-size of the venue/location name and street address add the CSS code below to your website.

`.deltec-tooltip-message {
	font-size: 14px;
}`

**Note:** This CSS is very basic and is just meant as a starting point. It could be overwritten by a more specific CSS call. Please see the [Arbitrary Section](https://wordpress.org/plugins/display-event-locations-tec/) on the WordPress Repository page or on the [Github Repository README](https://github.com/mike-weiner/display-event-locations-tec#css-classes) for a detailed list of the CSS classes in use by this plugin.

### How do I change the name and/or street address for event locations? 

This plugin uses the location/venue name and address that is entered within the [Modern Tribe Event System](https://theeventscalendar.com/product/wordpress-events-calendar/) itself. To change the name or street address of an event location/venue hover over `Events` in the administration sidebar and select `Venue` from the flyout that appears. 

Then select the location that you wish to change the name or address of. Once the page loads you will be able to change the name and address. Once you finish making updates, click the blue `Update` button. More information on creating venues can be found here: [https://theeventscalendar.com/knowledgebase/k/venue-and-organizer-pages/](https://theeventscalendar.com/knowledgebase/k/venue-and-organizer-pages/)

### What plugins are required for these changes to take effect?

Your website must use The Events Calendar 5.0+ **OR** The Events Calendar Pro 5.0+ for this plugin to correctly modify the tooltip in the month calendar view.

### Does this plugin change the tooltip for both regular and featured events?

Yes. This will plugin will display the event's venue name and street address (if you have enabled the address to be displayed) for both regular and featured events. See the [screenshots](https://wordpress.org/plugins/display-event-locations-tec/#screenshots) to see how this would look.

### Will this plugin work on both the legacy and v2 calendar views?

No. As of version `4.0.0` of this plugin, ***only*** the the new calendar views (v2 views) introduced with The Events Calendar 5.0+ and The Events Calendar Pro 5.0+.

## Screenshots

1. The settings page for the `Display Event Location for The Events Calendar` plugin. This is where you can change what is displayed on your tooltip when a user hovers over an event on your website's monthly calendar.
2. This is what the tooltip for a standard event will look like after activating this plugin with only the location name enabled in the tooltip.
3. This is what the tooltip for a standard event will look like after activating this plugin with both the location name and street address enabled in the tooltip.
4. This is what the tooltip for a featured event will look like after activating this plugin with only the location name enabled in the tooltip.
5. This is what the tooltip for a featured event will look like after activating this plugin with both the location name and street address enabled in the tooltip.

## Changelog

### 4.5.0
* Released on Wednesday, December 25, 2024
* Added a `Text Domain` to the plugin.
* Fixed all warnings from the WordPress Plugin Check tool.
* Formatted all code into a consistent manner.
* Support for WordPress v6.7+ has been confirmed.
* Edited: `display-event-locations-tec.php`
* Edited: `README.md`
* Edited: `includes/settings-page/admin-menu.php`
* Edited: `includes/settings-page/settings-callbacks.php`
* Edited: `includes/settings-page/settings-page.php`
* Edited: `includes/settings-page/settings-register.php`
* Edited: `includes/settings-page/settings-validate.php`
* Edited: `tribe-templates/month/tooltip-venue.php`

### 4.4.0
* Released on Saturday, March 16, 2024
* Added: Display Event Locations for The Events Calendar now uses WordPress's `Requires Plugins` functionality and has a formal dependency of The Events Calendar.
* Removed: Custom logic that checked whether The Events Calendar was installed. Replaced with WordPress's core `Requires Plugins` functionality introduced with WordPress 6.5.
* Edited: `display-event-locations-tec.php`
* Edited: `README.md`

### 4.3.0
* Released on Wednesday, June 14, 2023
* Added: DELTEC custom templates for The Events Calendar are now found in `/tribe-templates/`.
* Added: The custom DELTEC tooltip template now uses a WordPress action to inject the event's venue information into the tooltip that is displayed when hovering over an event on the monthly calendar view. This work creates a clear path forward for future template customizations.
* Added: The WordPress Plugin Repository listing for this plugin now features the `Community` tag.
* Added: The plugin `README` includes a simpler description on the plugin's functionality and improved clarity to both the installation instructions and the plugin FAQs. All in an effort to make things clearer and less overwhelming to new users.
* Added: The logic for the custom tooltip template has been moved into `/tribe-templates/month/tooltip-venue.php` and no longer relies on the title template. This decouples the plugin's custom tooltip modification from changes that the developers of The Events Calendar might make to the title portion of the tooltip.
* Fixed: Code throughout the plugin source code was cleaned and simplified for improved clarity and performance.
* Removed: DELTEC will no longer look in your active child theme for The Events Calendar templates since all of the custom templates are found within the source code for the DELTEC plugin only.
* Added: `tribe-templates/`
* Added: `tribe-templates/month/`
* Added: `tribe-templates/month/tooltip-venue.php`
* Renamed: `plugin.php` to `display-event-locations-tec.php`
* Edited: `display-event-locations-tec.php`
* Edited: `README.md`
* Edited: `/includes/settings-page/admin-menu.php`
* Edited: `/includes/settings-page/settings-callbacks.php`
* Edited: `/includes/settings-page/settings-page.php`
* Edited: `/includes/settings-page/settings-register.php`
* Edited: `/includes/settings-page/settings-validate.php`
* Removed: `/tribe/events/month/calendar-body/day/calendar-events/calendar-event/tooltip/title.php`

### 4.2.0
* Released on October 11, 2022
* Fixed: Fixed a bug that kept the event venue name and location from displaying on venues without an address.
* Edited: `/tribe/events/month/calendar-body/day/calendar-events/calendar-event/tooltip/title.php`
* Edited: `plugin.php`
* Edited: `README.md`

### 4.1.0
* Released on September 23, 2022
* Fixed: Fixed a bug that caused the full street address not to be displayed even if the user had it set to display on the plugin's setting page.
* Edited: `/tribe/events/month/calendar-body/day/calendar-events/calendar-event/tooltip/title.php`
* Edited: `README.md`

### 4.0.0
* Released on December 19, 2021
* Added: Tested Support with WP v5.9.
* Added: Updated logo and banner assets created by Danielle Attinella.
* Removed: Support for modifying the tooltip in the legacy views has been removed.
* Removed: Removed screenshot assets that showed legacy views as they are being retired by The Events Calendar in Q1 '22.
* Added: `assets/banner-772x250.png`
* Added: `assets/banner-1544x500.png`
* Deleted: `assets/screenshot-6.png`
* Deleted: `assets/screenshot-7.png`
* Deleted: `assets/screenshot-8.png`
* Deleted: `assets/screenshot-9.png`
* Deleted: `tribe-events/month/tooltip.php`
* Edited: `assets/icon-128x128.png`
* Edited: `assets/icon-256x256.png`
* Edited: `plugin.php`
* Edited: `README.md`

### 3.3.3
* Released on November 25, 2020
* Added: Confirmed support with WordPress v5.6 and updated the `Tested up to` tag accordingly.
* Edited: `README.md`

### 3.3.2
* Released on July 30, 2020
* Added: Confirmed support with WordPress v5.5 and updated the `Tested up to` tag accordingly.
* Added: Updated the minimum PHP version to 7.0 as WordPress will soon require that minimum version near the end of the year and updated the `Requires PHP` tag accordingly.
* Added: Updated the minimum WordPress version to 5.0 and updated the `Requires at least` tag accordingly.
* Fixed: Removed `$options` variable storing value of `get_option('deltec_options', deltec_options_default())` in `deltec_on_activate()`.
* Fixed: Changed .zip package name and name in README file from `wordpress-[version]-display-event-locations-tec.zip` to `display-event-locations-tec.[version].zip` to better support manual plugin updates.
* Fixed: Added release date for v3.3.1 in the Changelog.
* Fixed: Changed all appropriate occurrences of "Wordpress" to "WordPress" in the README.
* Edited: `plugin.php`
* Edited: `README.md`

### 3.3.1
* Released on June 26, 2020
* Fixed: Fixed plugin settings resetting to default values upon update of plugin.
* Fixed: Removed typos in v2.2 Changelog and Upgrade Notice.
* Fixed: Removed typos in v1.1 Changelog and Upgrade Notice.
* Fixed: Removed typos in `CSS Classes` portion of the `Arbitrary Section` of the README.
* Removed: Removed excess `.DS_Store` file in `tribe/events/month/calendar-body/day/calendar-events/calendar-event/tooltip/`.
* Edited: `plugin.php`
* Edited: `README.md`

### 3.3
* Released on June 24, 2020
* Added: Tested up to tag changed to 5.4.2 as support with WordPress 5.4.2 has been confirmed.
* Added: Stable tag changed to 3.3 to reflect latest version.
* Added: Support with The Events Calendar 5.1.4 has been confirmed.
* Added: Support with The Events Calendar PRO 5.1.3 has been confirmed.
* Fixed: Removed excess HTML from `tooltip.php` in `/tribe-events/month/`.
* Fixed: New Author URI that will link out to my new personal website.
* Fixed: Clarified the description of `.deltec-tooltip-message` in the CSS classes area of the arbitrary section of the README.
* Fixed: Fixed the typo in admin warning that is displayed with The Events Calendar is not activated on the site.
* Fixed: Fixed typos in `plugin.php` file.
* Fixed: Fixed the typo in special thanks section of the README.
* Fixed: Fixed typos in previous upgrade notices within the README.
* Fixed: Fixed typos in the comments of `settings-callbacks.php` in `includes/settings-page/`.
* Fixed: Fixed typos in the comments of `settings-page.php` in `includes/settings-page/`.
* Fixed: Fixed typos in the comments of `settings-validate.php` in `includes/settings-page/`.
* Edited: `plugin.php`
* Edited: `README.md`
* Edited: `includes/settings-page/settings-callbacks.php`
* Edited: `includes/settings-page/settings-page.php`
* Edited: `includes/settings-page/settings-validate.php`
* Edited: `/tribe/events/month/calendar-body/day/calendar-events/calendar-event/tooltip/title.php`
* Edited: `/tribe-events/month/tooltip.php`

### 3.2
* Released on May 13, 2020
* Added: Stable tag updated to 3.2.
* Added: Tested up to tag changed to 5.4.1 as support with WordPress 5.4.1 has been confirmed.
* Added: New CSS class system for the information that is added to the tooltip by the plugin to allow for greater control. New CSS classes for use are: `.deltec-tooltip-message`, `.deltec-location-name-prefix`, `.deltec-location-name`, and `.deltec-street-address`. See the [Arbitrary Section on CSS Classes](https://github.com/mike-weiner/display-event-locations-tec#css-classes) on the Github Repository README for more information.
* Fixed: Fixed typos within README.
* Removed: Old CSS class `.deltec-tribe-events-location` has been removed in place of the new robust CSS class system to allow for greater control of the stylization of the location information within tooltip (See Above).
* Removed: Excess comments have been removed from the template override files for the tooltip.
* Edited: `plugin.php`
* Edited: `README.md`
* Edited: `/tribe/events/month/calendar-body/day/calendar-events/calendar-event/tooltip/title.php`
* Edited: `/tribe-events/month/tooltip.php`

### 3.1
* Released on March 7, 2020
* Added: Support with WordPress 5.4 has been tested and confirmed.
* Added: An error message will be displayed for administrators on the plugin page if The Events Calendar plugin is not activated.
* Added: All functions within plugin.php have been alphabetized.
* Added: FAQ Question "How do I remove the phrase "Location: " that is displayed before the name of an event's venue/location within the tooltip so nothing is displayed before the event venue/location name?" has been added.
* Added: FAQ Question: "How do I change the font size of the event venue/location name and/or street address text within the tooltip?" has been added.
* Fixed: All excess function header comment information has been removed.
* Fixed: Fixed typo on Display Event Location for The Events Calendar settings page and within the menu sidebar.
* Fixed: Replaced screenshot-1 with an updated version to reflect removal of typo in settings page title.
* Edited: `plugin.php`
* Edited: `README.md`
* Edited: `/assets/screenshot1.png`
* Edited: `/includes/settings-page/admin-page.php`
* Edited: `/includes/settings-page/settings-page.php`
* Edited: `/includes/settings-page/settings-register.php`
* Edited: `/includes/settings-page/settings-callbacks.php`
* Edited: `/includes/settings-page/settings-validate.php`
* Edited: `/tribe/events/month/calendar-body/day/calendar-events/calendar-event/tooltip/title.php`
* Edited: `/tribe-events/month/tooltip.php`

### 3.0.2 
* Released on February 8, 2020
* Fixed: Fixed inconsistencies in the plugin name within the files headers.
* Fixed: Removed unintended logic from plugin.php that used tribe_events_views_v2_is_enabled().
* Updated: The description of this plugin has been updated to reflect new features.
* Edited: `plugin.php`
* Edited: `README.md`
* Edited: `/includes/settings-page/admin-page.php`
* Edited: `/includes/settings-page/settings-page.php`
* Edited: `/includes/settings-page/settings-callbacks.php`

### 3.0.1
* Released on February 7, 2020
* Fixed: Fixed the file path for the currently active theme within deltec_tribe_custom_template_paths_v2_views(). This will allow TEC to look into your active theme directory (correctly) to grab any additional template overrides after it has pulled the templates from our plugin in. 
* Edited: `plugin.php`
* Edited: `README.md`

### 3.0 
* Released on February 7, 2020
* Added: Support for overriding the tooltip on the new v2 calendar views has been added. (This allows you to display the venue/location name and address (if you have enabled it) within the tooltip.)
* Added: 9 new screenshots (screenshots 1-9) have been added to the WordPress Plugin listing page to reflect what the tooltip in the legacy and v2 calendar views with the location and/or address displayed for an event.
* Added: This plugin will now allow for template overrides that you already have in your active theme folder. It will first use the templates within our plugin and will then check your active theme directory for any additional templates. 
* Added: All functions and files have been documented and typos have been removed (please, let us know if you find any others).
* Fixed: Fixed a bug that prevented tooltip from displaying for events that did not have an venue/location set.
* Fixed: Tooltip preview on "Display Event Location for The Events Calendar" settings page has been updated to reflect new street address formatting.
* Fixed: Fixed 'Undefined Index' notice for the 'display-full-address' option through the WP Settings API.
* Fixed: Fixed 'Illegal String Offset' Warning on Settings Callback.
* Fixed: Removed excess HTML from tooltip.php located at /tribe-events/month/tooltip.php
* Edited: `plugin.php`
* Edited: `README.md`
* Edited: `/assets/screenshot1.png`
* Edited: `/assets/screenshot2.png`
* Edited: `/assets/screenshot3.png`
* Edited: `/assets/screenshot4.png`
* Edited: `/assets/screenshot5.png`
* Edited: `/assets/screenshot6.png`
* Edited: `/assets/screenshot7.png`
* Edited: `/assets/screenshot8.png`
* Edited: `/assets/screenshot9.png`
* Edited: `/includes/settings-page/admin-page.php`
* Edited: `/includes/settings-page/settings-page.php`
* Edited: `/includes/settings-page/settings-register.php`
* Edited: `/includes/settings-page/settings-callbacks.php`
* Edited: `/includes/settings-page/settings-validate.php`
* Edited: `/tribe/events/month/calendar-body/day/calendar-events/calendar-event/tooltip/title.php`
* Edited: `/tribe-events/month/tooltip.php`

### 2.2 
* Released on January 13, 2020
* Added: All code has been cleaned and documented.
* Added: All function and variable names now use the global plugin prefix of `$deltec_`.
* Added: Tooltip overrides for events created with the block editor has been re-enabled. 
* Added: deltec_get_tec_plugin_version() has been added to get the version of the current version of The Events Calendar or The Events Calendar Pro that is installed and activated in preparation for The Events Calendar version 5.0!
* Notice: Modern Tribe has announced that version 5.0 will be released sometime this month (it is nearing the end of its beta!). We are working to get support for version 5.0 ready for launch. Please be aware that if you update to version 5.0 your tooltip will not be the same as the new version brings an entirely new look! We will work to get support for version 5.0 out ASAP! Keep your eye out for an update. 
* Edited: `/includes/settings-page/admin-page.php`
* Edited: `/includes/settings-page/settings-page.php`
* Edited: `/includes/settings-page/settings-register.php`
* Edited: `/includes/settings-page/settings-callbacks.php`
* Edited: `/includes/settings-page/settings-validate.php`
* Edited: `/tribe-events/month/tooltip.php`
* Edited: `plugin.php`
* Edited: `README.md`
* Removed: `/tribe/events/month/tooltip.php`
* Removed: `/tribe/events/month/pro/tooltip.php`
* Removed: `/tribe-events/month/pro/tooltip.php`

### 2.1
* Released on January 8, 2020
* Added: The event street address can now be displayed within the tooltip underneath the location name.
* Added: Uninstall Hook (Your settings for this plugin will now be deleted from the wp_ database when you uninstall this plugin.)
* Added: An additional line break has been added to featured event tooltips to make things more readable!
* Added: Travis CI has been implemented to automatically check for any syntax and compatibility issues with modern and common versions of PHP. 
* Added: New screenshots of the plugin to show the new feature of being able to add the street address to the tooltip.
* Edited: `/includes/settings-page/settings-page.php`
* Edited: `/includes/settings-page/settings-register.php`
* Edited: `/includes/settings-page/settings-callbacks.php`
* Edited: `/includes/settings-page/settings-validate.php`
* Edited: `/tribe/events/month/tooltip.php`
* Edited: `/tribe/events/month/pro/tooltip.php`
* Edited: `/tribe-events/month/tooltip.php`
* Edited: `/tribe-events/month/pro/tooltip.php`
* Edited: `/assets/screenshot1.png`
* Edited: `/assets/screenshot2.png`
* Edited: `/assets/screenshot3.png`
* Edited: `/assets/screenshot4.png`
* Edited: `/assets/screenshot5.png`
* Edited: `plugin.php`
* Edited: `README.md`
* Tested: Support up to WordPress 5.2.3 has been tested and confirmed
* Tested: Support up to PHP 7.4 has been tested and confirmed
* Tested: Minimum PHP Version is now set at 5.6

### 2.0.1
* Released on September 5, 2019
* Added: Support for WordPress 5.2.3 has been tested and confirmed.

### 2.0
* Released on July 8, 2019
* Added: Settings page titled "Display Event Location for The Events Calendar" has been added as as sub-menu page under the "Setting" section in the backend.
* Added: `/includes/`
* Added: `/includes/settings-page/admin-menu.php`
* Added: `/includes/settings-page/settings-page.php`
* Added: `/includes/settings-page/settings-register.php`
* Added: `/includes/settings-page/settings-callbacks.php`
* Added: `/includes/settings-page/settings-validate.php`
* Added: Preview of the tooltip text can be found on the settings page.
* Added: All setting fields are sanitized before being added to an array that is saved in the wp_ database.
* Added: Saved settings & options are now removed from your database upon the uninstalling of the Display Event Location for The Events Calendar Plugin.
* Added: Quick links to our settings page & support page can be found within our plugin listing on the Plugins page. 
* Tested: Support for WordPress 5.2.2+.
* Tested: Support for The Events Calendar 4.9.4+.
* Tested: Support for PHP 7.0+.
* Fixed: Unneeded HTML has been removed from all tooltip.php files.
* Fixed: All typos in commenting of the code have been removed.

### 1.1
* Released on May 12, 2019
* FIXED - Deactivation/Reactivation Bug.
* IMPLEMENTED - tribe_events_template_data_array() Hook.
* MISC. - All single-event.php Override Files Removed.

### 1.0.1
* FIXED - Adjusted readme.txt to display screenshots.
* CHANGED - Changed CSS Class from `tribe-events-location` to `deltec-tribe-events-location`.
* MISC. - Added plugin assets.

### 1.0 🎉
* Released on April 29, 2019
* Initial release.

## Upgrade Notice

### 4.5.0
Version 4.5.0 is a recommended, minor update. Support for WordPress v6.7.0+ has been confirmed. All WordPress Plugin Check warnings have been resolved. Read the changelog for more details.

### 4.4.0
Version 4.4.0 is a minor update. Support for WordPress 6.5.0 has been confirmed. A formal dependency on The Events Calendar has been added. Read the changelog for more details.

### 4.3.0
Version 4.3.0 is a minor update. The source code continues to receive some cleanup. Read the changelog for more details.

### 4.2.0
Version 4.2.0 is a minor update. This release is recommended as it fixes a bug that prevented the location name and address from displaying when using The Events Calendar v6.0+. Read the changelog for more details.

### 4.1.0
Version 4.1.0 is a minor update. A bug causing the full street address to not display correctly for certain themes has been fixed. Read the changelog for more details.

### 4.0.0
Version 4.0.0 is a major, breaking update. Support for legacy calendar views has been removed. New plugin branding, created by Danielle Attinella, has been added. Read the changelog for more details.

### 3.3.3
Version 3.3.3 is a patch update. Support for WordPress v5.6 has been confirmed. Read the changelog for more details.

### 3.3.2
Version 3.3.2 is a patch update. Support for WordPress v5.5 has been confirmed. Minimum PHP version has been increases to v7.0.0+. Read the changelog for more details.

### 3.3.1
Version 3.3.1 is a patch update. A bug fix for plugin settings being wiped out when you update the plugin or reactive it has been shipped. Read the changelog for more details.

### 3.3
Version 3.3 is a minor update. Codebase size has been reduced. Documentation has been improved. Read the changelog for more details.

### 3.2
Version 3.2 is a minor update. This update allows for greater control of this plugin's styling with a brand new CSS structure. Support for WordPress 5.4.1 has been confirmed. Read the changelog for more details.

### 3.1
Version 3.1 is a minor update. Support for WordPress 5.4 has been confirmed. A new error message has been added if The Events Calendar is not installed and activated. Read the changelog for more details.

### 3.0.2
Version 3.0.2 is a patch update. The only changes include miscellaneous code cleanup. Read the changelog for more details.

### 3.0.1
Version 3.0.1 is a patch update. A small bug fix has been pushed to ensure template overrides work correctly with any theme. Read the changelog for more details.

### 3.0
Version 3.0 is a major update. Support for the v2 calendar views introduced with The Events Calendar 5.0 has been added! A handful of various bugs have also been fixed. Read the changelog for more details.

### 2.2
Version 2.2 is a minor update. Code has been cleaned and documented. Support for tooltip customizations for events created with the block editor has been restored. Excess files have been removed. Read the changelog for more details.

### 2.1
Version 2.1 is a minor update. You can now opt to display an event's location underneath the location name within the tooltip! Support for WordPress 5.2.3 has also been added. Read the changelog for more details.

### 2.0.1
Version 2.0.1 is a patch update. Changes include support for WordPress 5.2.3. Read the changelog for more details.

### 2.0
Version 2.0 is a major release. A new settings page for this plugin (Settings -> Display Event Location for The Events Calendar) has been added to quickly adjust the tooltip content. Read the changelog for more details.

### 1.1
Version 1.1 is a minor release. Changes include a bug fix that required deactivation of the Modern Tribe Events System plugin. Read the changelog for more details.

### 1.0.1
Version 1.0.1 is a patch release. Changes include typo fixes. Read the changelog for more details.

### 1.0
Hello, world! This is the first GA release of Display Event Location for The Events Calendar. Read the changelog for more details.

## Arbitrary section

### CSS Classes:
* `.deltec-tooltip-message` - A `paragraph` element that surrounds all of the information that is added to the tooltip by this plugin.
* `.deltec-location-name-prefix` - A `span` element that surrounds the prefix message that you can set in the Display Event Location for The Events Calendar settings area in the textfield labeled ***Tooltip Message Before Venue/Location Name***
* `.deltec-location-name` - A `span` element that surrounds the name of the event's venue/location name.
* `.deltec-street-address` - A `span` element that surrounds the all elements of the street address for the event's venue/location (if enabled in Display Event Location for The Events Calendar settings area)

### Github Repository
The Github Repository for this plugin can be found here: https://github.com/mike-weiner/display-event-locations-tec.

### References:
Below are resources and references that were used to help develop parts of this plugin. 

1. [https://support.theeventscalendar.com/153124-Themers-Guide](https://support.theeventscalendar.com/153124-Themers-Guide)
2. [https://docs.theeventscalendar.com/reference/hooks/tribe_events_template_data_array/](https://docs.theeventscalendar.com/reference/hooks/tribe_events_template_data_array/)
3. [https://docs.theeventscalendar.com/reference/hooks/tribe_template_theme_path_list/](https://docs.theeventscalendar.com/reference/hooks/tribe_template_theme_path_list/)
4. [https://docs.theeventscalendar.com/reference/functions/tribe_address_exists/](https://docs.theeventscalendar.com/reference/functions/tribe_address_exists/)
5. [https://docs.theeventscalendar.com/reference/functions/tribe_get_full_address/](https://docs.theeventscalendar.com/reference/functions/tribe_get_full_address/)
6. [https://theeventscalendar.com/knowledgebase/k/custom-additional-template-locations/](https://theeventscalendar.com/knowledgebase/k/custom-additional-template-locations/)
7. [https://gist.github.com/cliffordp/b76421f2490a8b8995493f203e11b331](https://gist.github.com/cliffordp/b76421f2490a8b8995493f203e11b331)

### Special Thanks:
A special thank you to user [@cliffordp](https://github.com/cliffordp) for several helpful gists (linked in the [resources](https://github.com/mike-weiner/display-event-locations-tec#references) section) that were used as boilerplates achieve certain functionality within this plugin.

Thank you to [Danielle Attinella](https://ella-ella.studio) for her amazing work on designing a new icon and banner image for the plugin.
