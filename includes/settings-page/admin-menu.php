<?php

 /**
 *  Exit plugin if it is being accessed directly
 * 
 * @link
 *
 * @see 
 * 
 * @param 
 *
 * @return 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


 /**
 * Add submenu page for 'Display Event Location for The Events Calendar' under the Settings tab
 * 
 * @link
 *
 * @see 
 * 
 * @param 
 *
 * @return 
 */
function deltec_settings_page_add_sub_level_menu() {
    add_submenu_page(
        'options-general.php', // Where submenu item is listed
        'Display Event Locations for The Events Calendar', // Page Title
        'Display Event Locations for The Events Calendar', // Submenu Title
        'manage_options', // User Requirements Needed to Access this Settings Page
        'deltec_settings', // Submenu Slug
        'deltec_display_settings_page' // Callback Function
    );
}
add_action('admin_menu', 'deltec_settings_page_add_sub_level_menu');