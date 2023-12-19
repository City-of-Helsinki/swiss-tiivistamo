<?php

function tiivistamo_composer_autoloader() {
    $autoloader = trailingslashit(ABSPATH) . 'vendor/autoload.php';
    if ( file_exists( $autoloader ) ) {
        require_once $autoloader;
    }
}

tiivistamo_composer_autoloader();

require(get_template_directory().'/lib/init.php');
