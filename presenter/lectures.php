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
Reveal.initialize({});';

include($_SERVER['DOCUMENT_ROOT']."/includes/si_header_presentation.php"); ?>

<div class="reveal">
	<?php include($lectureDir.$thisLecture['file']); ?>
</div>

<?php include($_SERVER['DOCUMENT_ROOT']."/includes/si_footer.php"); ?>