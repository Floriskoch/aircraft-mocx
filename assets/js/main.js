$(document).ready(function () {

  var googleMaps = require('./partials/_google-maps.js');
  var scrollMonitor = require('./../../node_modules/scrollmonitor');

  var servicesSection = document.getElementById('services');
  var elementWatcher = scrollMonitor.create(servicesSection);
  var header = document.getElementsByTagName('header')[0];

  elementWatcher.enterViewport(function () {
    if ($(window).scrollTop() > 0) {
      header.classList.add('down');
    }
  });

  elementWatcher.exitViewport(function () {
    if (!elementWatcher.isAboveViewport) header.classList.remove('down');
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