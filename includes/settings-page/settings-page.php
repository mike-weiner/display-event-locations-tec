<?php

// Exit file if it is being accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Add items to the Display Event Locations for The Events Calendar settings page
function deltec_display_settings_page() {
    // Check to make sure the user has access to the page (via Admin account)
    if (!current_user_can('manage_options')) {
        return; // If they do not have the needed permissions to view this page => return nothing
    }
    ?>

    <div class="wrap">
        <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
        <form action="options.php" method="post">
            <?php
            //Output Security Fields
            settings_fields( 'deltec_options');

            //Output Setting Sections
            do_settings_sections('deltec_settings');

            //Submit Button
            submit_button();
            ?>
        </form>
        <h2>Preview of Tooltip</h2>
        <p>Below is a preview of your tooltip! The phrase you have entered in the field above is bolded below. The name of the event, address, city, state, zip code, and country will be replaced with the information that is entered within the individual event on the front-end of the site for visitors.  </p>

        <p>Event Title<br />
            <strong><?php $deltec_options = get_option('deltec_options'); $tooltip_message = $deltec_options['pre-venue-message']; echo $tooltip_message ?> </strong>Event Location Name<br />
            Fake Address 1234<br />
            Fake City, Fake State<br />
        </p>
    </div>

    <?php
}