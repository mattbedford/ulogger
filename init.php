<?php

/**
 * Plugin Name: ulogger
 * Description: Ultra-basic utility class to log php output in a convenient manner.
 * Version:     1.2.0
 * Author:      Dev Team
 * Text Domain: ulogger
 * Requires PHP:    8.1
 * License:     GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */


// No namespace. Sorry.


add_action('init', function() {

    if(class_exists('ulogger')) return;
    if(!current_user_can('manage_options')) return;
    if(!defined('ABSPATH')) return;

    require_once __DIR__ . '/src/ulogger.php';

});
