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

    $('.accContent').slideUp('slow');

    if ($(this).next().is(':hidden') == true) {
      $(this).next().slideDown('slow');
    }

    var currentAccordion = $(event.currentTarget);
    $('.accordion.active').removeClass('active');
    currentAccordion.addClass('active');
  });
  $('.accContent').hide(); // Hide Content
  $('.home').show(); // Show the "Home" content by Default


  var hashtag = window.location.hash;

  var zonderhekje = hashtag.substring(1);

  $('.' + zonderhekje).show(); // Show the "Home" content by Default

});

