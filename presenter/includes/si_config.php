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
//define('MINIFIER_ENABLED', (PHP_MAJOR_VERSION>=5 && PHP_MINOR_VERSION>=2) ? true : false);
define('MINIFIER_ENABLED', (PHP_MAJOR_VERSION>=5 && PHP_MINOR_VERSION>=2) ? false : false);

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
	array('file' => 'siren.css', 'media' => 'all'),
	array('file' => 'video-js.min.css', 'media' => 'all')
);
$CORE_PARAMS['scripts'] = array('si.js', 'video.min.js');
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

// for older dev environments
if (!function_exists('json_encode')) {
	function json_encode($data) {
		switch ($type = gettype($data)) {
			case 'NULL':
				return 'null';
			case 'boolean':
				return ($data ? 'true' : 'false');
			case 'integer':
			case 'double':
			case 'float':
				return $data;
			case 'string':
				return '"' . addslashes($data) . '"';
			case 'object':
				$data = get_object_vars($data);
			case 'array':
				$output_index_count = 0;
				$output_indexed = array();
				$output_associative = array();
				foreach ($data as $key => $value) {
					$output_indexed[] = json_encode($value);
					$output_associative[] = json_encode($key) . ':' . json_encode($value);
					if ($output_index_count !== NULL && $output_index_count++ !== $key) {
						$output_index_count = NULL;
					}
				}
				if ($output_index_count !== NULL) {
					return '[' . implode(',', $output_indexed) . ']';
				} else {
					return '{' . implode(',', $output_associative) . '}';
				}
			default:
				return ''; // Not supported
		}
	}
}