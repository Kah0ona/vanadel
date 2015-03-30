// *************************************
//
//   Navigation dropdown
//   -> Expand/collapse submenus
//
// *************************************

// -------------------------------------
// Toggle .is-hidden class onclick and
// allow only one open menu at a time
// -------------------------------------

$(document).ready(function() {
	$.fn.animateRotate = function(angle, duration, easing, complete) {
		var args = $.speed(duration, easing, complete);
		var step = args.step;
		return this.each(function(i, e) {
			args.complete = $.proxy(args.complete, e);
			args.step = function(now) {
				$.style(e, 'transform', 'rotate(' + now + 'deg)');
				if (step) return step.apply(e, arguments);
			};

			$({deg: 0}).animate({deg: angle}, args);
		});
	};


  // ----------------------------
  // Accordion
  // ----------------------------
  $('.accordion').click(function(event) {
    var currentAccordion = $(event.currentTarget);
	var props =	{
		  duration: 500,
		  step: function(now, fx) {
			  console.log(now);
			  $(this).css({"transform": "rotate("+now+"deg)"});
		  }
	};
	if ($(this).next().is(':hidden')) {
		
		currentAccordion.find('img').animate({'rotation' : 0}, props);
		$(this).next().slideDown('slow');

		//close all other open accs
		$(this).siblings('.accContent').not($(this).next()).slideUp('slow');

		//find other open accordeons, and animate their arrow back
		var otherAccordeons = currentAccordion.siblings('.accordion').find('img');
		otherAccordeons.animate({'rotation' : -90}, props);


	} else {
		currentAccordion.find('img').animate({'rotation' : -90}, props);
		$(this).next().slideUp('slow');
	}
  });

  $('.accContent').hide(); // Hide Content
  $('.home').show(); // Show the "Home" content by Default

  var hashtag = window.location.hash;

  var zonderhekje = hashtag.substring(1);
  if(zonderhekje != null && zonderhekje != ''){
	 $('.' + zonderhekje).show(); // Show the "Home" content by Default
  }

});

