<?php
/**
 * Plugin Name: Display Event Location for The Events Calendar
 * Plugin URI: https://michaelweiner.org/
 * Description: Add the event venue/location to the tooltip that is displayed on hover over in the month view of the calendar when using The Events Calendar or The Events Calendar Pro by Modern Tribe.
 * Author: Michael Weiner
 * Author URI: https://michaelweiner.org/
 * Version: 3.3.2
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Exit plugin if it is being accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Call dependencies to other files for admin views
if (is_admin()) {
    require_once plugin_dir_path(__FILE__) . 'includes/settings-page/admin-menu.php';
    require_once plugin_dir_path(__FILE__) . 'includes/settings-page/settings-page.php';
    require_once plugin_dir_path(__FILE__) . 'includes/settings-page/settings-register.php';
    require_once plugin_dir_path(__FILE__) . 'includes/settings-page/settings-callbacks.php';
    require_once plugin_dir_path(__FILE__) . 'includes/settings-page/settings-validate.php';
}

/**
 * Establish directory paths for the template overrides for LEGACY views within TEC
 * 
 * @link https://gist.github.com/b76421f2490a8b8995493f203e11b331
 * @link https://theeventscalendar.com/knowledgebase/k/custom-additional-template-locations/
 *
 * @see Tribe__Events__Templates::getTemplateHierarchy()
 *
 * @param string $file A string containing the complete file path trying to be loaded
 * @param string $template A string containing the template name to be loaded
 *
 * @return string Returns a string of the full file path to template
 * 
 */
function deltec_tribe_custom_template_paths_legacy_views ( string $file, string $template ) {
    // Variable to store complete path to plugin with trailing slash
    $deltec_base_plugin_path = trailingslashit( plugin_dir_path( __FILE__ ) );

    // Variable to store complete path to active theme with trailing slash
    $deltec_active_theme_path = trailingslashit( get_stylesheet_directory() );

    // Put custom templates in order of priority for legacy calendar views (up to The Events Calendar 4.9.14)
    // Check this plugin for template overrides and then the current theme for template overrides for every template being loaded 
	$deltec_template_paths_legacy = [
		'deltec_plugin_tec_legacy'   => $deltec_base_plugin_path . 'tribe-events/' . $template,
		'deltec_active_theme_tec_legacy' => $deltec_active_theme_path . 'tribe-events/' . $template,
    ];

    // For every custom template file path within $deltec_template_paths_legacy --> check if it exists 
	foreach ($deltec_template_paths_legacy as $deltec_single_path_legacy) {
		if (file_exists($deltec_single_path_legacy)) {
			return $deltec_single_path_legacy;
		}
    }

    // If none of the file paths within $deltec_template_paths_legacy use the default template(s) from TEC
	return $file;
}
add_filter('tribe_events_template', 'deltec_tribe_custom_template_paths_legacy_views', 10, 2);

/**
 * Establish directory paths for the template overrides for v2 views within TEC
 *
 * Each custom array's `path` is whatever you want it to be (i.e. customizable) up until the 'v2' part of each
 * template's override path. 
 * 
 * So if the TEC location for a view is:
 *   /wp-content/plugins/the-events-calendar/src/views/v2/month/calendar-body/day/calendar-events/calendar-event/tooltip/title.php
 * Then this plugin's override location would be:
 *   /wp-content/plugins/MY-PLUGIN/tribe/events/month/calendar-body/day/calendar-events/calendar-event/tooltip/title.php
 * And the theme's override location would be:
 *   /wp-content/themes/YOUR-CHILD-THEME/tribe/events/month/calendar-body/day/calendar-events/calendar-event/tooltip/title.php
 * FYI: Parent/Child Themes will override this custom plugin's override. Use your own custom code with the
 * `tribe_template_theme_path_list` filter instead of this snippet to trump theme overrides
 *
 * @link https://gist.github.com/cliffordp/39e68939132bd0f483e0111972165455 
 * @link https://gist.github.com/b76421f2490a8b8995493f203e11b331
 * @link https://theeventscalendar.com/knowledgebase/k/custom-additional-template-locations/
 *
 * @see  Tribe__Template::get_template_path_list()
 *
 * @param array An array of file paths for additional directories to look into for template overrides.
 *
 * @return array
 */
function deltec_tribe_custom_template_paths_v2_views( $folders ) {
    // Variable to store complete path to plugin with trailing slash
    $deltec_base_plugin_path = trailingslashit( plugin_dir_path( __FILE__ ) );

    // Variable to store complete path to active theme with trailing slash
    $deltec_active_theme_path = trailingslashit( get_stylesheet_directory() );

    /*
     * Custom loading location for overriding The Events Calendar's templates from within the deltec plugin
     */
    $folders['deltec_plugin_tec'] = [
      'id'       => 'deltec_plugin_tec',
      'priority' => 5, // The Event Calendar is 20, Event Tickets is 17
      'path'     =>  $deltec_base_plugin_path . 'tribe/events', 
    ];

    /*
     * Custom loading location for overriding The Events Calendar's templates from within the currently activated theme
     */
    $folders['deltec_active_theme_tec'] = [
        'id'       => 'deltec_active_theme_tec',
        'priority' => 10, // The Event Calendar is 20, Event Tickets is 17
        'path'     =>  $deltec_active_theme_path . 'tribe/events', 
      ];
   
    return $folders;
}
add_filter( 'tribe_template_theme_path_list', 'deltec_tribe_custom_template_paths_v2_views' );


/**
 * Display admin notice for admins only on the plugin page if The Events Calendar is not activated
 * 
 * @see deltec_plugin_init()
 */
function deltec_error_install_tec_plugin() {
    global $pagenow; // Get pagenow global variable

    // Declare a variable to store the url for TEC WP plugin directory listing to display within iframe
    $deltec_url = 'plugin-install.php?tab=plugin-information&plugin=the-events-calendar&TB_iframe=true';

    // If the current page is the plugins page and the current user has administration privileges
    if ( $pagenow == 'plugins.php' && current_user_can( 'manage_options' ) ) {

        // Display error message to user that is non-dismissible
        echo '<div class="error"><p>'
        .sprintf(
            '%1s <a href="%2s" class="thickbox" title="%3s">%4s</a>.',

            esc_html__( 'Display Event Location for The Events Calendar requires The Events Calendar to function properly. Please, install and activate the latest version of', 'tribe-events-calendar' ),
            esc_url( $deltec_url ),
            esc_html__( 'The Events Calendar', 'tribe-events-calendar' ),
            esc_html__( 'The Events Calendar', 'tribe-events-calendar' )

            ).
        '</p></div>';
    }
}


/**
 * Check to determine if The Events Calendar plugin is activated anytime a plugin is activated or deactivated
 * 
 * @see deltec_error_install_tec_plugin()
 */
function deltec_plugin_init() {    
    // If the Tribe Events Calendar 'Tribe__Main' class does not exists => TEC is either not activated
    if ( ! class_exists( 'Tribe__Main' ) ) {
        add_action( 'admin_notices', 'deltec_error_install_tec_plugin' ); // Call action to display error message to user
    }
}
add_action( 'plugins_loaded', 'deltec_plugin_init' );


/**
 * Initialize default deltec_options to WP options database upon installation 
 */
function deltec_on_activate(){
    // Set the values of the deltec options to their defaults if options do not exist
    if (!get_option('deltec_options')){ 
        get_option('deltec_options', deltec_options_default());
    }
}
// Call deltec_on_activate() when the plugin in activated
register_activation_hook(__FILE__,'deltec_on_activate'); 


/**
 * Initialize default deltec_options to WP options database upon installation
 */
function deltec_on_uninstall() {
    // Remove deltec_options from the WP database upon deletion
    delete_option('deltec_options'); 
}
// Call deltec_on_uninstall when the plugin in uninstalled
register_uninstall_hook( __FILE__, 'deltec_on_uninstall');


/**
 * Initialize an array to store the default deltec_options for WP to use
 * 
 * @see deltec_on_activate()
 */
function deltec_options_default() {
    return array (
        'pre-venue-message' => 'Location:',
        'display-full-address' => '',
    );
}


/**
 * Modifies the "Display Event Location for The Events Calendar" plugin page listing by adding the 'Settings' action link for plugin listing
 *
 * @param string $deltec_links A string that contains a placeholder for an array of links to be returned to WP
 * 
 * @return array Returns an array of html ahref links for WP to use on settings page
 */
function deltec_register_action_links($deltec_links) {
    // Get the file path to the root directory of this plugin
    $deltec_base = plugin_basename(__FILE__);

    // Get settings page for the Display Event Location for The Events Calendar settings page
    $deltec_settings_url = menu_page_url('deltec_settings', false);

    // Create HTML ahref to the settings page
    $deltec_settings_link = '<a href="'.$deltec_settings_url.'">' . __( 'Settings', 'settings' ) . '</a>';

    // Add settings_link to array of links to be returned
    $deltec_links[] = $deltec_settings_link; 
    // Return the array of custom links established above

    return $deltec_links;
}
add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'deltec_register_action_links' );


/**
 * Modifies the "Display Event Location for The Events Calendar" plugin page listing by adding the 'Donate' action link for plugin listing
 * 
 * @param string $deltec_links A string that acts as a placeholder for an array of links to be returned to WP
 * @param string $deltec_file  A string containing the complete file path to the plugin listing being edited
 * 
 * @return array Returns an array of html ahref links for WP to use on settings page
 */
function deltec_register_meta_links ($deltec_links, $deltec_file) {
    // Get the file path to the root directory of this plugin
    $deltec_base = plugin_basename(__FILE__);

    // Check to make sure we are editing our plugin listing
    if ($deltec_file == $deltec_base) { 
        // Add link to the settings page under the plugin description
        $deltec_links[] = '<a href="'.menu_page_url('deltec_settings', false).'">' . __( 'Settings', 'settings' ) . '</a>';

        // Add link to make a financial contribution under the plugin description
        $deltec_links[] = '<a href="https://paypal.me/michaelw13" target="_blank">' . __('Support Our Work') . '</a>';
    }
    
    // Return the array of custom links created above
    return $deltec_links;
}
add_filter('plugin_row_meta',  'deltec_register_meta_links', 10, 2);


/**
 * Returns json with additional information for tooltip to be used with javascript templating functions for tooltip
 * 
 * @see tribe_events_template_data_array()
 *
 * @param $json       
 * @param $event 
 * @param $additional 
 *
 * @return string Returns a string containing json that will be used with javascript templating
 */
function deltec_tribe_template_data_array ( $json, $event, $additional ){
    // Get the venue being hovered over
    $deltec_venue = tribe_get_venue_id($event);

    // Check to make sure the current event has a venue set before adding data trying to retrieve information about the venue
    // If no venue is set, the unaltered json data will be returned
    $deltec_venue_is_set = isset($deltec_venue);

    // If the venue exists get the information needed for the tooltip template override
    if ($deltec_venue_is_set) {
        $json['venue'] = $deltec_venue;
        $json['venue_link'] = tribe_get_venue_link($deltec_venue, false);
        $json['venue_title'] = tribe_get_venue($deltec_venue);
        $json['venue_address'] = tribe_get_address($deltec_venue);
        $json['venue_city'] = tribe_get_city($deltec_venue);
        $json['venue_state'] = tribe_get_state($deltec_venue);
        $json['venue_zip'] = tribe_get_zip($deltec_venue);
        $json['venue_country'] = tribe_get_country($deltec_venue);
    }

    // Return the json that will be used with javascript templating
    return $json;
}
add_filter('tribe_events_template_data_array', 'deltec_tribe_template_data_array', 10, 3);

