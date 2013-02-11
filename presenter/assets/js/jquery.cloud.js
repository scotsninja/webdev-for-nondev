var tc;

$(document).ready(function(){
	// if loading second page directly, start the tag cloud
	if(window.location.hash == '#/1'){
		tc = $('.tag-cloud').tagCloud();
	}
	
	// event handlers to ensure tag cloud only runs when it is the active slide
	Reveal.addEventListener( 'slidechanged', function(event){
		if(event.indexh == 1){
			tc = $('.tag-cloud').tagCloud();
		} else if(tc) {
			tc.destroy();
			tc = null;
		}
	});
});

(function($) {
$.fn.tagCloud = function(options) {

	var el;
	var defaults = {
		wind: true,
		skewXMin: -30,
		skewXMax: 30,
		skewYMin: -30,
		skewYMax: 30,
		rotateMin: -70,
		rotateMax: 70,
		timerInterval: 1500
	};

	var settings = $.extend(defaults, options);
	
	this.destroy = function(){
		el.destroy();
	}

	return this.each(function() {
		el = new tagCloud($(this), settings);

		el.render();
	});
};

function tagCloud(element, options) {
	this.render = render;
	this.destroy = destroy;
	
	var _element = element[0],
		settings = options,
		items = [], ni = 0,
		itemClasses = ['small','medium','large','xlarge'],
		boxHeight = 0, boxWidth = 0,
		timer;

	function render(){
		load();

		if(settings.wind){
			$(_element).addClass('blowing');
		}
		
		$(_element).height($(window).innerHeight()-250);
		boxHeight = $(_element).height();
		boxWidth = $(_element).width();
		
		// set interval to animate items
		timer = setInterval(function(){nextItem()}, settings.timerInterval);
	}
	
	function destroy(){
		clearInterval(timer);
		$(_element).find('span').remove();
		$(_element).removeClass('blowing')
	}
	
	function nextItem(){
		if(!(items.length>0 && ni < items.length)){
			clearInterval(timer);
			return;
		}
		
		var word = items[ni],
			size = itemClasses[_.random(0,itemClasses.length)],
			pos = calculatePosition(),
			skew = calculateSkew(),
			rMin = (pos.top<=30) ? 0 : settings.rotateMin,
			rMax = (pos.top>=(boxHeight-30)) ? 0 : settings.rotateMax,
			rotation = _.random(rMin, rMax);
		
		$(_element).append('<span id="word'+ni+'">'+word+'</span>');
		
		$('#word'+ni).css({
			top:pos.top+'px',
			left:pos.left+'px',
			transform:'rotate('+rotation+'deg) skewX('+skew.x+'deg) skewY('+skew.y+'deg)'
		}).fadeIn(500,function(){
			$(this).addClass('grow '+size);
		});
		
		ni++;
		
		function calculatePosition(){
			var l = _.random(0, (boxWidth-50)),
				t = _.random(0, (boxHeight-20));

			return {top:t,left:l}
		}
		
		function calculateSkew(){
			var x = _.random(settings.skewXMin, settings.skewXMax),
				y = _.random(settings.skewYMin, settings.skewYMax);

			return {x:x,y:y}
		}
	}
	
	function load(){
		// shuffle loaded items
		//items = _.shuffle(CI);
		items = ['item','item','item','item','item','item','item','item','item','item','item','item','item','item','item','item','item','item','item','item','item','item','item','item','item','item','item','item','item','item','item','item','item','item','item','item','item','item','item','item','item','item','item','item','item','item','item'];
	}
};
})(jQuery);