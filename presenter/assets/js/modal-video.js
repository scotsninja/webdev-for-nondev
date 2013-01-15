/* modal window video viewer using the video.js html5 video player library */
new (MODAL_VIDEO = (function(){
	function constructor(){
		
		/*
		// add available files here:
		* index: file identifier used in the data-overlay attribute
		* width: width, in pixels, of the video frame
		* height: height, in pixels, of the video frame
		* mp4: path to the mp4 version of the video
		* ogg: path to the ogg version of the video
		* webm: path to the webm version of the file
		* label: not really used
		* poster: image to display before the video starts playing
		*/
		this.config = {
			"test":{"width":640,"height":360,"mp4":"/video/test.mp4","ogg":"","webm":"/video/test.webm",label:"This doesn't exist",poster:""}
		};

		/* mutable settings */
		this.domain = 'http://'+window.location.hostname;;		// set the domain to use for absolute urls, otherwise playback doesn't work in IE8
		this.autoplay = true;					// set to true to start playback after the window opens. can be overriden by adding the 'no-autoplay' class to the element opening the video
		this.enablePlaceholder = false;			// if true, displays the image referenced in this.placeholder if a valid video is not specified
		this.forceFlash = false;				// set to true to force flash version for all browsers
		this.placeholder = '/img/ui/video-callout-default.png';	// path to a placeholder image
		this.playerSkin = 'vjs-default-skin';	// the video.js skin to use for the player
		this.techOrder = {};					// set the tech order for playback ({"techOrder":["flash","html5"]}.  default: html, flash, links
		
		/* don't change these: something horrible could happen (maybe) */
		this.modalId = 'video-box';				// id of the modal window
		this.resource = null;					// stores the video data for quick reference
		this.player = null;						// stores the player instance for quick reference, after loaded
		
		// initialize links on pageload
		$((function(e){return function(){e.initLinks();};})(this));
	}
	
	// binds click event to all video links
	constructor.prototype.initLinks = function() {
		$('.video').click((function(e){return function(){e.loadResource(this);return false;}})(this));
	}
	
	// makes sure the video reference passed to the object is valid
	constructor.prototype.loadResource = function(link) {
		if ($(link).attr('data-overlay') != '') {
			this.resource = this.config[$(link).attr('data-overlay')];
		}
		
		if (typeof this.resource == 'object' || this.enablePlaceholder) {
			this.autoplay = ($(link).hasClass('no-autoplay')) ? false : this.autoplay;
			this.openWindow();
		}
	}
	
	// creates modal window
	constructor.prototype.openWindow = function() {
		$('body').append('<div id="'+this.modalId+'" class="overlay-content"><div id="video-container"><div id="video-cancel-btn"></div></div></div>');
		
		this.appendVideo();
		this.centerWindow();
		
		var autoplay = (this.resource) ? this.autoplay : false;
		
		this.showMask();
		$('#'+this.modalId).fadeIn(500, function() {
			if (autoplay) {
				_V_("my_video").ready(function() {
					this.play();
				});
			}
		});
		
		$('#mask, #video-cancel-btn').click((function(e) {return function(){e.closeWindow();return false;}})(this));
		
		// GA event tracking
		if (this.resource) {
			//trackEvent('Videos', 'Video Plays', this.resource.label);
		}
	}
	
	// closes the modal window
	constructor.prototype.closeWindow = function() {
		this.destroy();
		$('#'+this.modalId).fadeOut(500).remove();
		this.hideMask();
	}
	
	// centers the modal window in respect to the viewport
	constructor.prototype.centerWindow = function() {
		if (typeof window['centerWindow'] == 'function') {
			centerWindow('#'+this.modalId);
		} else {
			$('#'+this.modalId).css({'top':($(window).height()/2-$('#'+this.modalId).height()/2+$(window).scrollTop())+'px','left':($(window).width()/2-$('#'+this.modalId).width()/2)+'px'});
		}
	}
	
	// writes the proper video tag to the modal window
	constructor.prototype.appendVideo = function() {
		if (this.resource) {
			var videoTag = '<video id="my_video" class="video-js '+this.playerSkin+'" controls preload="none" width="'+this.resource.width+'" height="'+this.resource.height+'" poster="'+this.resource.poster+'">';

			if (this.resource.mp4 != '') {
				videoTag += '<source src="'+this.resource.mp4+'" type="video/mp4" />';
			}
			if (this.resource.ogg != '') {
				videoTag += '<source src="'+this.resource.ogg+'" type="video/ogg" />';
			}
			if (this.resource.webm != '') {
				videoTag += '<source src="'+this.resource.webm+'" type="video/webm" />';
			}
			videoTag += '</video>';
			
			$('#'+this.modalId).find('#video-container').append(videoTag);
			
			// setup the video player
			// force IE (all versions) to use flash, otherwise it doesn't work at all
			var data = (this.isIE() || this.forceFlash) ? {"techOrder":["flash","html5","links"]} : this.techOrder;
			this.player = _V_("my_video", data);
			
			// IE8 requires absolute path (maybe should just use absolute path by default?  it's too late to test that...  --kk)
			if (this.isIE8()) {
				this.player.src(this.domain+this.resource.mp4);
			}
		} else if (this.enablePlaceholder) {
			$('#'+this.modalId).find('#video-container').append('<div><img src="'+this.placeholder+'" width="718" height="404" alt="Video Plays" /></div>');
		}
	}
	
	// stops playback and destroys video 
	constructor.prototype.destroy = function() {
		if (this.player) {
			// stop video playback and remove video element
			this.player.pause().destroy();
		}
		this.resource = null;
		this.player = null;
	}
	
	// returns true if any version of IE
	constructor.prototype.isIE = function() {
		return (navigator.appName=='Microsoft Internet Explorer');
	};
	
	// returns true if IE8
	constructor.prototype.isIE8 = function() {
		var ret = false, version
		
		if (this.isIE()) {
			version = parseFloat(/MSIE ([0-9]{1,}\.[0-9]{0,})/.exec(navigator.userAgent)[1]);
			ret = (version == 8);
		}
		
		return ret;
	};
	
	// creates the modal effect by placing a mask behind the window
	constructor.prototype.showMask = function() {
		// if the function is already defined, use that
		if (typeof window['showMask'] == 'function') {
			showMask();
		} // otherwise, define a function here
		else {
			// first, make sure there is a mask element to display
			if ($('body').find('#mask').length<1) {
				$('body').append('<div id="mask" style="position:absolute;top:0;left:0;z-index:9000;background-color:#222;display:none;"></div>');
			}
			
			// fit mask to height and width of viewport
			var maskHeight = $(document).height(),
				maskWidth = $(document).width();
			$('#mask').css({width:maskWidth,height:maskHeight}).fadeIn(500).fadeTo('slow', 0.8);
		}
	};
	
	// hides the modal mask
	constructor.prototype.hideMask = function() {
		// if the function is already defined, use that
		if (typeof window['hideMask'] == 'function') {
			hideMask();
		} else {
			$('#mask').fadeOut();
		}
	};
	
	return constructor; 
})());
