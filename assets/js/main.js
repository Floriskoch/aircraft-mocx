$(document).ready(function () {

  var googleMaps = require('./partials/_google-maps.js');
  var scrollMonitor = require('./../../node_modules/scrollmonitor');

  $(window).on('scroll', function() {
    if ($(window).scrollTop() > 200) {
      $('header').addClass('down');
    } else {
      $('header').removeClass('down');
    }
  });

  // Initialize bootstrap popovers
  $("[data-toggle=popover]").popover({
    html: true
  });

  $('a[href*="#"]:not([href="#"])').click(function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top - 112
        }, 1000);
        return false;
      }
    }
  });

  // Set padding top for intro section
  if ($(window).width() >= 992) {
    $('#content').css('paddingTop', $(window).height());
  }

  // Initialize google maps
  googleMaps.init();
});