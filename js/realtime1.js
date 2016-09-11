
var intevalo1;
var entro=0;
var map2;
intevalo1 = setInterval(function(){initMap()},5000);
var map;
var total = 0;
var markerArray = [];
var routes2 = [];

function initMap() {
	$.post("server/vivoh.php",function(respuesta) {
     /*bueno para que accedan a cada una de las filas de las tablas es así:*/
     //abla_MySql = JSON.parse(respuesta);
   	 //console.log(Tabla_MySql[0].Latitud);
   	 //console.log(Tabla_MySql[0].Longitud);
   	 // console.log(Tabla_MySql[0].Latitud);
   	 // console.log(Tabla_MySql[0].Longitud);
   	   var prueba1 = JSON.parse(respuesta);
       var lat, lon;

       for (var j in prueba1) {
           var myLatLng = {lat: parseFloat(prueba1[j].Latitud), lng: parseFloat(prueba1[j].Longitud)};
           lat = parseFloat(prueba1[j].Latitud);
           lon = parseFloat(prueba1[j].Longitud);
        }

	  if(entro==0){
          map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 10.963889, lng: -74.796389},
          zoom: 15});
        }
      entro=1;

       routes2[total] =  new google.maps.LatLng(lat,lon);
       total=total+1;
       var polyline = new google.maps.Polyline({
           path: routes2,
           map: map2, 
           strokeColor: '#143254', 
           strokeWeight: 5, 
           strokeOpacity: 0.3, 
           clickable: false
        });

       var marker = new google.maps.Marker({
            position: myLatLng,
            map: map2,
            title: 'You are here'
        });

        for (var i = 0; i < markerArray.length; i++) {
             markerArray[i].setMap(null);
            };
        markerArray= [];
        markerArray.push(marker);

    });
}