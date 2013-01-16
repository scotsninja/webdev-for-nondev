<?php
require_once('./includes/lectures.php');

$settings['title'] = 'Home | Lecture Presentation Platform (Clio)';
$settings['body_classes'] = array('home','example');

include($_SERVER['DOCUMENT_ROOT']."/includes/si_header.php"); ?>

<div class="row-fluid">
	<div class="span12">
		{links to each lecture}
	</div>
</div>

<?php include($_SERVER['DOCUMENT_ROOT']."/includes/si_footer.php"); ?>