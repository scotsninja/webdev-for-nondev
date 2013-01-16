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
Reveal.initialize({transition:"default"});';

include($_SERVER['DOCUMENT_ROOT']."/includes/si_header_presentation.php"); ?>

<div class="reveal">
	<div class="slides">
		<section>
			<pre><?php var_dump($_GET['lecture'], $thisLecture); ?></pre>
		</section>
		<section>
			<p>Another slide</p>
		</section>
	</div>
</div>

<?php include($_SERVER['DOCUMENT_ROOT']."/includes/si_footer.php"); ?>