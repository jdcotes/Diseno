			
var intevalo1;
var entro=0;
 var map2;
   var Tabla_MySql;
 //intevalo1 = setInterval('mapa1()',11000);
 intevalo1 = setInterval(function(){initMap()},30000);
        // mapa1();
var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 10.963889, lng: -74.796389},
    zoom: 15
  });
}