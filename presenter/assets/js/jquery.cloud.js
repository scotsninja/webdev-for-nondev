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
		$_element = $(_element),
		settings = options,
		items = [], ni = 0,
		itemClasses = ['small','medium','large','xlarge'],
		boxHeight = 0, boxWidth = 0,
		timer;

	function render(){
		load();

		if(settings.wind){
			$_element.addClass('blowing');
		}
		
		$_element.height($(window).innerHeight()-250);
		boxHeight = $_element.height();
		boxWidth = $_element.width();
		
		// set interval to animate items
		timer = setInterval(function(){nextItem()}, settings.timerInterval);
	}
	
	function destroy(){
		clearInterval(timer);
		$_element.removeClass('blowing')
		$_element.find('span').hide().remove();
	}
	
	function nextItem(){
		if(!(items.length>0 && ni < items.length)){
			clearInterval(timer);
			return;
		}
		
		var word = items[ni],
			size = itemClasses[Math.floor(Math.random()*itemClasses.length)],
			pos = calculatePosition(),
			skew = calculateSkew(),
			rMin = (pos.top<=30) ? 0 : settings.rotateMin,
			rMax = (pos.top>=(boxHeight-30)) ? 0 : settings.rotateMax,
			rotation = getRand(rMin, rMax),
			ht;
		
		ht = '<span class="word '+size+'" id="word'+ni+'" style="top:'+pos.top+'px;left:'+pos.left+'px;\
			-webkit-transform: rotateZ('+rotation+'deg) skewY('+skew.y+'deg) skewX('+skew.x+'deg);\
			-moz-transform: rotateZ('+rotation+'deg) skewY('+skew.y+'deg) skewX('+skew.x+'deg);\
			-o-transform: rotateZ('+rotation+'deg) skewY('+skew.y+'deg) skewX('+skew.x+'deg);\
			-ms-transform: rotateZ('+rotation+'deg) skewY('+skew.y+'deg) skewX('+skew.x+'deg);\
			transform: rotateZ('+rotation+'deg) skewY('+skew.y+'deg) skewX('+skew.x+'deg);\
		">'+word+'</span>';

		$_element.append(ht);
		$_element.find('#word'+ni).fadeIn(500, function(){
			$(this).addClass('grow');
		});

		ni++;
		
		function calculatePosition(){
			var l = getRand(0, (boxWidth-50)),
				t = getRand(0, (boxHeight-20));

			return {top:t,left:l}
		}
		
		function calculateSkew(){
			var x = getRand(settings.skewXMin, settings.skewXMax),
				y = getRand(settings.skewYMin, settings.skewYMax);

			return {x:x,y:y}
		}
	}
	
	function load(){
		// shuffle loaded items
		items = _.shuffle(CI);
	}
	
	function getRand(min, max) {
		return Math.floor(Math.random() * (max - min + 1)) + min;
	}
};
})(jQuery);