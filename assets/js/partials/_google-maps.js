/**
 * Created by floriskoch on 06/10/15.
 */
var googleMaps = (function () {
  "use strict";

  function init() {

    // Initialize map
    initMap();
  }

  function initMap() {

    var center = {lat: 52.314061, lng: 4.6310622};
    if ($(window).width() < 992) {
      center = {lat: 52.314061, lng: 4.6968622}
    }

    // Create a map object and specify the DOM element for display.
    var map = new google.maps.Map(document.getElementById('map'), {
      center: center,
      scrollwheel: false,
      draggable: false,
      disableDefaultUI: true,
      zoom: 12
    });

    var image = '/assets/build/images/marker.png';
    var marker = new google.maps.Marker({
      position: {
        lat: 52.314061,
        lng: 4.6968622
      },
      map: map,
      icon: image
    });

    // On click open new google maps window
    marker.addListener('click', function () {
      window.open('https://www.google.nl/maps/@52.314061,4.6968622,3a,75y,316.21h,84.47t/data=!3m6!1e1!3m4!1sgOIkzKpMb96HSUJV9rTgjQ!2e0!7i13312!8i6656!6m1!1e1');
    });
  }


  return {
    init: init
  };
})();

module.exports = googleMaps;