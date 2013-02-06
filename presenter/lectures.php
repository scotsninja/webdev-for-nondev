<?php
require_once('./includes/si_functions.php');

if ($_GET['lecture'] == '') {
	header('location:/');
	exit;
}

// load lectures
$lectureDir = '../lectures/';

$xml = $lectureDir.'lectures.xml';
$lectures = xml2array($xml);

// search lectures
$thisLecture = searchLecturesByUrl($_GET['lecture'], $lectures['lectures']['lecture']);

if (!$thisLecture) {
	header('location:/');
	exit();
}

$theme = ($thisLecture['theme'] != '') ? $thisLecture['theme'] : 'default';

$settings['title'] = $thisLecture['title'];
$settings['body_classes'] = array('home','presentation');
$settings['stylesheets'][] = array('file' => 'reveal.min.css', 'media' => 'all');
$settings['stylesheets'][] = array('file' => 'theme/'.$theme.'.css', 'media' => 'all');
$settings['scripts'][] = 'reveal.js';
$settings['js'] .= '
Reveal.initialize({
	rollingLinks:false
});';

define('PRESENTATION_TITLE', $thisLecture['title']);
define('PRESENTATION_SUBTITLE', $thisLecture['subtitle']);
define('PRESENTATION_VERSION', $thisLecture['version']);
define('PRESENTATION_SERIES', $thisLecture['series']);
define('PRESENTATION_EDITION', $thisLecture['edition']);
define('PRESENTATION_DESCRIPTION', $thisLecture['description']);
define('PRESENTATION_AUTHOR', $thisLecture['author']);
define('PRESENTATION_DATE_UPDATED', (is_string($thisLecture['date_updated']) ? $thisLecture['date_updated'] : $thisLecture['date_created']));

include($_SERVER['DOCUMENT_ROOT']."/includes/si_header_presentation.php"); ?>

<div class="reveal">
	<?php include($lectureDir.$thisLecture['file']); ?>
</div>

<?php include($_SERVER['DOCUMENT_ROOT']."/includes/si_footer.php"); ?>