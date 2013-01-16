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


$settings['title'] = 'xxx';
$settings['body_classes'] = array('home','presentation');

include($_SERVER['DOCUMENT_ROOT']."/includes/si_header.php"); ?>

<div class="row-fluid">
	<div class="span12">
		<?php var_dump($_GET['lecture'], $thisLecture); ?>
	</div>
</div>

<?php include($_SERVER['DOCUMENT_ROOT']."/includes/si_footer.php"); ?>