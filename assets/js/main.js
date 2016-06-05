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
    html: true,
    trigger: 'hover',
    content: function() {

      if (this.dataset.image) {
        return '<div class="popover-content"><div class="row"><div class="col-sm-6">'+ this.dataset.text +'</div><div class="col-sm-6"><img src="'+ this.dataset.image +'" alt="" class="popover-image"></div></div></div>';
      } else {
        return '<div class="popover-content"><div class="row"><div class="col-sm-12">'+ this.dataset.text +'</div></div></div>';
      }
    }
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