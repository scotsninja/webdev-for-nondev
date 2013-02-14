<?php // Set the default values for the following parameters
// be sure to include leading "/" for paths!!!

if (!defined('PHP_VERSION_ID')) {
	$va = explode('.', PHP_VERSION);
	define('PHP_VERSION_ID', phpversion());
	define('PHP_MAJOR_VERSION', $va[0]);
	define('PHP_MINOR_VERSION', $va[2]);
	define('PHP_RELEASE_VERSION', $va[2]);
}

// minify library requires PHP 5.2.1, so disable it if not available (won't work on baxdev)
define('MINIFIER_ENABLED', (PHP_MAJOR_VERSION>=5 && PHP_MINOR_VERSION>=2) ? true : false);

$CORE_PARAMS = array();
$CORE_PARAMS['title'] = '';
$CORE_PARAMS['description'] = '';
$CORE_PARAMS['keywords'] = '';
$CORE_PARAMS['image'] = '';
$CORE_PARAMS['medium'] = '';
$CORE_PARAMS['lang'] = 'en';
$CORE_PARAMS['url'] = $_SERVER['REQUEST_URI'];
$CORE_PARAMS['stylesheets'] = array(
	array('file' => 'bootstrap.min.css', 'media' => 'all'),
	array('file' => 'bootstrap-responsive.min.css', 'media' => 'only screen and (max-device-width: 767px)'),
	array('file' => 'si.css', 'media' => 'all'),
	array('file' => 'siren.css', 'media' => 'all')
);
$CORE_PARAMS['scripts'] = array('si.js');
$CORE_PARAMS['css'] = '';
$CORE_PARAMS['js'] = '';
$CORE_PARAMS['ga_code'] = '';		// google analytics account

// if a database connection is required
$CORE_PARAMS['db_name'] = '';
$CORE_PARAMS['db_user'] = '';
$CORE_PARAMS['db_password'] = '';
$CORE_PARAMS['db_host'] = '';

if (is_array($settings)) {
	$settings = array_merge($CORE_PARAMS, $settings);
} else {
	$settings = $CORE_PARAMS;
}