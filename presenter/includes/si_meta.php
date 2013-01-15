<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/si_config.php');
ob_start('ob_gzhandler');
?>
<!DOCTYPE html>
<html lang="<?php echo $settings['lang']; ?>">
<head>
	<meta charset="UTF-8"/>
	<title><?php echo $settings['title']; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<meta property="og:title" content="<?php echo $settings['title']; ?>" />
	<meta name="description" content="<?php echo $settings['description']; ?>" />
	<meta property="og:description" content="<?php echo $settings['description']; ?>" />
	<meta name="keywords" content="<?php echo $settings['keywords']; ?>" />
	
	<meta property="og:url" content="http://<?php echo $_SERVER['SERVER_NAME'].$settings['url']; ?>" />
	<?php if ($settings['medium'] != '') { ?>
		<meta name="medium" content="<?php echo $settings['medium']; ?>" />
	<?php } ?>
	<?php if ($settings['image'] != '') { ?>
		<link rel="image_src" href="http://<?php echo $_SERVER['SERVER_NAME'].$settings['image']; ?>" />
		<meta property="og:image" content="http://<?php echo $_SERVER['SERVER_NAME'].$settings['image']; ?>" />
	<?php } ?>
	
	<link rel="shortcut icon" href="/favicon.ico" />
	
	<?php if ($settings['ga_code'] != '') { ?>
	<script type="text/javascript">
		var pluginUrl = '//www.google-analytics.com/plugins/ga/inpage_linkid.js';
		_gaq.push(['_require', 'inpage_linkid', pluginUrl]);
		_gaq.push(['_setAccount', '<?php echo $settings['ga_code']; ?>']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
	<?php } ?>

	<?php
	foreach($settings['stylesheets'] as $sheet) {
		$ch = (MINIFIER_ENABLED) ? '/min/?b=assets/css&amp;f='.$sheet['file'] : '/assets/css/'.$sheet['file']; ?>
		<link rel="stylesheet" type="text/css" href="<?php echo $ch; ?>" media="<?php echo $sheet['media']; ?>" />
	<?php }

	if ($settings['css'] != '') { ?>
		<style type="text/css"><?php echo $settings['css']; ?></style>
	<?php }
	
	if (file_exists($_SERVER['DOCUMENT_ROOT'].'/css/si-ie8.css')) { ?>
		<!--[if lte IE 8]><script type="text/javascript" src="/js/respond.min.js"></script><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="/css/si-ie8.css" media="all" /><![endif]-->
	<?php } ?>
</head>

<?php if (is_array($settings['body_classes']) && count($settings['body_classes'])>0) { ?>
	<body class="<?php echo implode(' ', $settings['body_classes']); ?>">
<?php } else { ?>
	<body>
<?php } ?>

<div class="container-fluid">