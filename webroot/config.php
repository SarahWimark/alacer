<?php
/**
 * Config-file for Alacer. Change settings here to affect installation.
 *
 */
 
/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
 
 
/**
 * Define Anax paths.
 *
 */
define('ALACER_INSTALL_PATH', __DIR__ . '/..');
define('ALACER_THEME_PATH', ALACER_INSTALL_PATH . '/theme/render.php');
 
 
/**
 * Include bootstrapping functions.
 *
 */
include(ALACER_INSTALL_PATH . '/src/bootstrap.php');
 
 
/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();
 
 
/**
 * Create the Anax variable.
 *
 */
$alacer = array();
 
 
/**
 * Site wide settings.
 *
 */
$alacer['lang']         = 'sv';
$alacer['title_append'] = ' | Anax en webbtemplate';

/**
 * Theme related settings.
 *
 */
$alacer['stylesheets'] = array('css/style.css');
$alacer['favicon']    = 'favicon.ico';

/**
 * Settings for JavaScript.
 *
 */
$alacer['modernizr'] = 'js/modernizr.js';

/**
 * Settings for JavaScript.
 *
 */
$alacer['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
//$alacer['jquery'] = null; // To disable jQuery

$alacer['javascript_include'] = array();
//$anax['javascript_include'] = array('js/main.js'); // To add extra javascript files

// Add js/main.js for inklusion
//$alacer['javascript_include'][] = 'js/main.js';
//$alacer['javascript_include'][] = 'js/other.js';

/**
 * Google analytics.
 *
 */
$alacer['google_analytics'] = 'UA-22093351-1'; // Set to null to disable google analytics