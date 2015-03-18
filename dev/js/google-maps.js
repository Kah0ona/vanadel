var map;
var geocoder;

function initialize() {
  var mapOptions = {
    zoom: 4,
    center: new google.maps.LatLng(-33, 151),
    mapTypeControl: true,
    mapTypeControlOptions: {
      style: google.maps.MapTypeControlStyle.DEFAULT,
      mapTypeIds: [
        google.maps.MapTypeId.ROADMAP,
        google.maps.MapTypeId.TERRAIN
      ]
    },
    zoomControl: true,
    zoomControlOptions: {
      style: google.maps.ZoomControlStyle.SMALL
    }
  };
  var map = new google.maps.Map(document.getElementById('map-canvas'),
                                mapOptions);
}

function initialize() {
  geocoder = new google.maps.Geocoder();
  var mapCanvas = document.getElementById('map_canvas');
  if (mapCanvas != null) {
    var mapOptions = {
      center: new google.maps.LatLng(52.267002,4.606041),
      zoom: 12,
      scrollwheel: false,

      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    map = new google.maps.Map(mapCanvas, mapOptions);
    var contentString = '<div id="content" style="color: black">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h4 style="font-size: 14px; font-family: Roboto,Arial;" id="firstHeading" class="firstHeading">Van Adel | Administratie &dot; Belastingen &dot; Advies</h4>'+
      '<div id="bodyContent">'+
      '<p><a style="color:blue;" href="https://www.google.nl/maps/dir//Van+Adel+%7C+Administratie+%E2%80%A2+Belastingen+%E2%80%A2+Advies,+Wapserveld+13,+2151+JP+Nieuw-Vennep/@52.2671694,4.6060651,18z/data=!4m13!1m4!3m3!1s0x47c5c29c0d380e1f:0x97adaf75424fa4fa!2sVan+Adel+%7C+Administratie+%E2%80%A2+Belastingen+%E2%80%A2+Advies!3b1!4m7!1m0!1m5!1m1!1s0x47c5c29c0d380e1f:0x97adaf75424fa4fa!2m2!1d4.606041!2d52.267002" target="_blank">Routebeschrijving</a></p>'+
      '</div>'+
      '</div>';
    

    codeAddress('Wapserveld 13 2151 JP Nieuw-Vennep', 'red', 'Van Adel Finance', contentString);
  }
}

function codeAddress(address,  colour, title, overlay) {
  geocoder.geocode({
    'address': address
  }, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);





      var infowindow = new google.maps.InfoWindow({
        content: overlay
      });

      var marker = new google.maps.Marker({
        map: map,
        icon: 'http://maps.google.com/mapfiles/ms/icons/'+colour+'-dot.png',
        title : title,
        position: new google.maps.LatLng(52.267002,4.606041)
      });

      google.maps.event.addListener(marker, 'mouseover', function() {
         infowindow.open(map,marker);
      });
      
    }
  });
}

google.maps.event.addDomListener(window, 'load', initialize);



