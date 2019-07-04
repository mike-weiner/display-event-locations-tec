<?php

// Exit plugin if it is being accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Remove saved deltec options when the Display Event Location for The Events Calendar is uninstalled
delete_option('deltec_options');

?>