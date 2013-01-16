<?php
require_once('./includes/si_functions.php');

if ($_GET['lecture'] == '') {
	header('location:/');
	exit;
}

// load lectures
$xml = 'includes/lectures.xml';
$lectures = xml2array($xml);

// search lectures
$l = (count($lectures['lectures'])==1) ? $lectures['lectures'] : $lectures['lectures']['lecture'];
$thisLecture = searchLecturesByUrl($_GET['lecture'], $l);

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
	<?php include('../'.$thisLecture['file']); ?>
</div>

<?php include($_SERVER['DOCUMENT_ROOT']."/includes/si_footer.php"); ?>