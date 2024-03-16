<?php
/**
 * Plugin Name: Display Event Location for The Events Calendar
 * Requires Plugins: the-events-calendar
 * Plugin URI: https://michaelweiner.org/
 * Description: Display an event's venue (location) in the tooltip of the monthly calendar view when using The Events Calendar or The Events Calendar Pro.
 * Version: 4.4.0
 * Requires at least: 5.0.0
 * Requires PHP: 7.0.0
 * Author: Michael Weiner
 * Author URI: https://michaelweiner.org/
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */


/**
 *  Exit plugin if it is being accessed directly
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 *  Load files for settings pages for administrators of the site
 */
if ( is_admin() ) {
    require_once plugin_dir_path(__FILE__) . 'includes/settings-page/admin-menu.php';
    require_once plugin_dir_path(__FILE__) . 'includes/settings-page/settings-page.php';
    require_once plugin_dir_path(__FILE__) . 'includes/settings-page/settings-register.php';
    require_once plugin_dir_path(__FILE__) . 'includes/settings-page/settings-callbacks.php';
    require_once plugin_dir_path(__FILE__) . 'includes/settings-page/settings-validate.php';
}


/**
 * A filter that will modify where The Events Calendar looks for templates
 * 
 * @link https://theeventscalendar.com/knowledgebase/k/custom-templates-for-the-updated-calendar-views/
 * @link https://docs.theeventscalendar.com/reference/hooks/tribe_template_path_list/
 * 
 * @param array $folders An array containing arrays of various locations to look for templates
 * @param object $template The current instance of the Tribe_Template class
 */
function deltec_tribe_custom_template_paths_v2_views( $folders, $template ) {
    $deltec_base_plugin_path = trailingslashit( plugin_dir_path( __FILE__ ) );
    $deltec_priority = 5;
    $deltec_subdirectory_containing_templates = 'tribe-templates';
    $deltec_id = 'display-event-locations-tec';

    /*
     * Custom loading location for overriding The Events Calendar's templates from within the DELTEC plugin
     */
    $folders[$deltec_id] = [
      'id'       => $deltec_id,
      'priority' => $deltec_priority,
      'path'     =>  $deltec_base_plugin_path . $deltec_subdirectory_containing_templates, 
    ];
   
    return $folders;
}
add_filter( 'tribe_template_theme_path_list', 'deltec_tribe_custom_template_paths_v2_views', 10, 2 );


/**
 * Hook that will add my custom tooltip template after the month title template has finished being evaluated.
 * 
 * @link https://theeventscalendar.com/knowledgebase/k/using-template-filters-and-actions/
 */
add_action( 'tribe_template_after_include:events/v2/month/calendar-body/day/calendar-events/calendar-event/tooltip/title', function ( $file, $name, $template ) {
    $template->template( 'month/tooltip-venue' );
}, 10, 3 );


/**
 * Set the default deltec_options in the WordPress options database upon installation of the plugin
 */
function deltec_on_activate(){
    if ( ! get_option( 'deltec_options' ) ){ 
        get_option( 'deltec_options', deltec_options_default() );
    }
}
// Call deltec_on_activate() when the plugin in activated
register_activation_hook( __FILE__, 'deltec_on_activate' ); 


/**
 * Remove deltec_options from the WordPress options database upon removal of the plugin
 */
function deltec_on_uninstall() {
    delete_option( 'deltec_options' ); 
}
register_uninstall_hook( __FILE__, 'deltec_on_uninstall' );


/**
 * Returns an array containing the default setting values
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
 * Modifies the DELTEC plugin page action links
 * 
 * @link https://developer.wordpress.org/reference/hooks/plugin_action_links_plugin_file/
 *
 * @param array $actions An array of the existing default plugin action links
 * @param string $plugin_file A string containing the path to the plugin file (relative to the plugins directory)
 * @param array $plugin_data An array of the plugin's data
 * @param string $context The context filter currently applied to the plugin
 * 
 * @return array Returns a merged array of the default and custom DELTEC action links
 */
function deltec_register_action_links( $actions, $plugin_file, $plugin_data, $context ) {
    $deltec_action_links = array (
        '<a href="' . menu_page_url( 'deltec_settings', false ) . '">' . __( 'Settings', 'display-event-locations-tec' ) .'</a>',
    );

    $actions = array_merge( $actions, $deltec_action_links );
    return $actions;
}
add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'deltec_register_action_links', 10, 4 );


/**
 * Modifies the DELTEC plugin page metadata links
 * 
 * @link https://developer.wordpress.org/reference/hooks/plugin_row_meta/
 * 
 * @param array $plugin_meta An array of the existing meta actions links
 * @param string $plugin_file A string containing the path to the plugin file (relative to the plugins directory)
 * @param array $plugin_data An array of the plugin's data
 * @param string $status The status filter currently applied to the plugin
 * 
 * @return array Returns a merged array of the default and custom DELTEC meta links
 */
function deltec_register_meta_links( $plugin_meta, $plugin_file, $plugin_data, $status ) {
    if ( strpos( $plugin_file, basename( __FILE__ ) ) ) { 
        $plugin_meta[] = '<a href="'.menu_page_url( 'deltec_settings', false ).'">' . __( 'Settings', 'display-event-locations-tec' ) . '</a>';
        $plugin_meta[] = '<a href="https://paypal.me/michaelw13" target="_blank">' . __( 'Support My Work', 'display-event-locations-tec' ) . '</a>';
    }
    
    return $plugin_meta;
}
add_filter( 'plugin_row_meta',  'deltec_register_meta_links', 10, 4 );