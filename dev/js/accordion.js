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
		currentAccordion.find('img').animate(
			{'rotation' : 0}, props
				);
		$(this).next().slideDown('slow');

		//close all other open accs
		$(this).siblings('.accContent').not($(this).next()).slideUp('slow');
	} else {
		currentAccordion.find('img').animate(
			{'rotation' : -90}, props
		);
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

