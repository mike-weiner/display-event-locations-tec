<?php

 /**
 *  Exit plugin if it is being accessed directly
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


/**
 *  Add items to the Display Event Location for The Events Calendar settings page
 */
function deltec_display_settings_page() {
    // Check to make sure the user has access to the page
    if (!current_user_can('manage_options')) {
        return;
    }
    ?>

    <div class="wrap">
        <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
        <form action="options.php" method="post">
            <?php
            //Output Settings Fields
            settings_fields( 'deltec_options');

            //Output Setting Sections
            do_settings_sections('deltec_settings');

            //Submit Button
            submit_button();
            ?>
        </form> 

        <!-- Tooltip Preview Area -->
        <h2>Preview of Tooltip</h2>
        <p>Below is a preview of your tooltip! The phrase you have entered in the field above is bolded below. The name of the event, venue/location name, address, city, state, zip code, and country (if enabled) will be replaced with the information that is entered in the events system.  </p>

        <p>Event Title<br />
            <strong><?php $deltec_options = get_option('deltec_options'); $tooltip_message = $deltec_options['pre-venue-message']; echo $tooltip_message ?> </strong>Event Location Name<br />
            <?php 
                $deltec_checkbox_option = empty(get_option('deltec_options')['display-full-address']) ? 0 : 1;

                if ($deltec_checkbox_option == 1) {
                    $deltec_html = '<strong>Fake Address 1234<br /> Fake City, Fake State Zip Code <br /> Country</strong>';
                    echo $deltec_html;
                }
            ?>
        </p>
    </div>

    <?php
}