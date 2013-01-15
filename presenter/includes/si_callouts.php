<?php 
// directory containing callout includes
$calloutDir = '/includes/callouts/';

// array of callout files and respective numbers
$callouts = array(
	1 => 'example.html'
);

// add the above callout numbers to the array for the respective page, below:
$pages = array(
	"/index.html" => array(1)
);

// load the callouts for this page
if (is_array($pages[$_SERVER['PHP_SELF']])) {
	foreach ($pages[$_SERVER['PHP_SELF']] as $cId) {
		include($_SERVER['DOCUMENT_ROOT'].$calloutDir.$callouts[$cId]);
	}
}