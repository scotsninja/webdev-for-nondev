$(document).ready(function(){
/*
	Reveal.addEventListener( 'slidechanged', function( event ) {
		// event.previousSlide, event.currentSlide, event.indexh, event.indexv
		//alert(1);
	});
	*/
	
	$('.tag-cloud').tagCloud();
});

(function($) {
$.fn.tagCloud = function(options) {

	var defaults = {
		timerInterval: 1500
	};

	var settings = $.extend(defaults, options);

	return this.each(function() {
		var f = new tagCloud($(this), settings);

		f.render();
	});
};

function tagCloud(element, options) {
	this.render = render;
	
	var _element = element[0],
		settings = options,
		items = [], ni = 0,
		itemClasses = ['small','medium','large','xlarge'],
		boxHeight = 0, boxWidth = 0,
		timer;

	function render(){
		load();
		
		$(_element).height($(window).innerHeight()-250);
		boxHeight = $(_element).height();
		boxWidth = $(_element).width();
		
		// set interval to animate items
		timer = setInterval(function(){nextItem()}, settings.timerInterval);
	}
	
	function nextItem(){
		if(!(items.length>0 && ni < items.length)){
			clearInterval(timer);
			return;
		}
		
		var word = items[ni],
			pos = calculatePosition(),
			skew = calculateSkew(),
			rotation = _.random(-90,90),
			size = itemClasses[_.random(0,itemClasses.length)];
		
		$(_element).append('<span id="word'+ni+'">'+word+'</span>');
		
		$('#word'+ni).css({
			top:pos.top,
			left:pos.left,
			transform:'rotate('+rotation+'deg) skewX('+skew.x+') skewY('+skew.y+')'
		}).fadeIn(500,function(){
			$(this).addClass('grow '+size);
		});
		
		ni++;
		
		function calculatePosition(){
			var l = _.random(0, boxWidth),
				t = _.random(0, boxHeight);

			return {top:t+'px',left:l+'px'}
		}
		
		function calculateSkew(){
			var x = _.random(-30, 30),
				y = _.random(-30, 30);

			return {x:x+'deg',y:y+'deg'}
		}
	}
	
	function load(){
		// shuffle loaded items
		items = _.shuffle(CI);
	}
};
})(jQuery);