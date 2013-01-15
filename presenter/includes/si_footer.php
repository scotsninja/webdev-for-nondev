<div class="row-fluid">
	<div class="span12">
		<div id="footer">{Footer goes here}</div>
	</div>
</div>
</div> <?php // end container ?>
<div id="fb-root"></div>
<div id="mask"></div>

<!-- use google CDN for jquery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<?php /*
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
*/ ?>

<?php if (MINIFIER_ENABLED) { ?>
	<script type="text/javascript" src="/min/?b=assets/js&amp;f=<?php echo implode(',',$settings['scripts']); ?>"></script>
<?php } else {
	foreach ($settings['scripts'] as $script) { ?>
		<script type="text/javascript" src="/assets/js/<?php echo $script; ?>"></script>
	<?php }
} ?>

<?php if ($settings['js'] != '') { ?>
	<script type="text/javascript"><?php echo $settings['js']; ?></script>
<?php } ?>

<script type="text/javascript">
	window.fbAsyncInit = function() {
		FB.init({
			status: true,
			cookie: true,
			xfbml: true
		});
		
		// track facebook like
		FB.Event.subscribe('edge.create', function(href, widget) {
            //trackEvent('Share', 'Facebook', '');
		});
	};
	(function(d){
		// async load facebook
		var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
		if (d.getElementById(id)) {return;}
		js = d.createElement('script'); js.id = id; js.async = true;
		js.src = "//connect.facebook.net/en_US/all.js";
		ref.parentNode.insertBefore(js, ref);
		 
		 // async load google+
		var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		po.src = 'https://apis.google.com/js/plusone.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	}(document));
</script>
</body>
</html>
<?php ob_end_flush(); ?>