import './navigation.js';
import './menu.js';

//Smooth scrolling
jQuery(document).ready(function ($) {
  $('.scrollup a').on('click', function (e) {
    // e.preventDefault()
    $('html, body').animate(
      {
        scrollTop: $($(this).attr('href')).offset().top,
      },
      500,
      'linear'
    );
  });

  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $('.scrollup').fadeIn();
    } else {
      $('.scrollup').fadeOut();
    }
  });
});
