"use strict";

var $ = app.jQuery;

// Check if the browser is too old and show a message
app.functions.checkBrowser = function checkBrowser() {
  if( $.browser.msie && parseInt($.browser.version) < 10 )
    alert('Votre navigateur est expiré ! Mettez-le à jour directement sur le site officiel de Microsoft Internet Explorer en suivant ce lien : http://windows.microsoft.com/fr-fr/internet-explorer/download-ie');
  else if( $.browser.mozilla && $.browser.version == '11.0' )
    return false;
  else if( $.browser.mozilla && parseInt($.browser.version) < 16 )
    alert('Votre navigateur est expiré ! Mettez-le à jour directement sur le site officiel de Mozilla Firefox en suivant ce lien : http://www.mozilla.org/fr/firefox/new/');
};

// Render google custom maps
app.functions.renderMap = function renderMap() {
  var hhLatLng = new google.maps.LatLng(48.110221,-1.683345);
  var mapOptions = {
    center: hhLatLng,
    zoom: 15,
    scrollwheel: false,
    streetViewControl: false,
    zoomControl: false,
    draggable: false,
    disableDefaultUI: false,
    disableDoubleClickZoom: true,
    panControl: false,
    mapTypeControl: false,
    styles: [
      {
        "featureType": "administrative",
        "stylers": [
          { "visibility": "off" }
        ]
      },{
        "featureType": "poi",
        "stylers": [
          { "visibility": "off" }
        ]
      },{
        "featureType": "landscape.man_made",
        "stylers": [
          { "color": "#efe1cf" }
        ]
      },{
        "featureType": "road",
        "elementType": "geometry.stroke",
        "stylers": [
          { "visibility": "off" }
        ]
      },{
        "featureType": "road.arterial",
        "elementType": "geometry.fill",
        "stylers": [
          { "color": "#d1bda4" }
        ]
      },{
        "featureType": "road.local",
        "elementType": "geometry.fill",
        "stylers": [
          { "color": "#fbf3e8" }
        ]
      },{
        "featureType": "water",
        "elementType": "geometry.fill",
        "stylers": [
          { "color": "#d8b4cc" }
        ]
      },{
        "featureType": "road",
        "elementType": "labels.text.stroke",
        "stylers": [
          { "visibility": "off" }
        ]
      }
    ]
  };
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
  
  var marker = new google.maps.Marker({
    position: hhLatLng,
    map: map,
    animation: google.maps.Animation.DROP,
    icon: '/assets/img/pinpoint.png'
  });
}

// Search placeholder fallback
app.functions.placeholder = function placeholder($element) {
  if(!Modernizr.input.placeholder){
    $element.focus(function() {
      var $input = $(this);

      if ($input.val() == $input.attr('placeholder')) {
        $input.val('');
      }
    }).blur(function() {
      var $input = $(this);

      if ($input.val() === '' || $input.val() == $input.attr('placeholder')) {
        $input.val($input.attr('placeholder'));
      }
    }).blur();

    $element.parents('form').submit(function() {
      $(this).find('#edit-key-words').each(function() {
        var $input = $(this);

        if ($input.val() == $input.attr('placeholder')) {
          $input.val('');
        }
      });
    });
  }
};

// Have fun right now
app.functions.konami = function konami($element, cssClass) {
  var kKeys = [];
  function Kpress(e){
      kKeys.push(e.keyCode);
      if (kKeys.toString().indexOf("38,38,40,40,37,39,37,39,66,65") >= 0) {
        $(this).unbind('keydown', Kpress);
        $element.addClass(cssClass);
      }
  }
  $(document).keydown(Kpress);
};