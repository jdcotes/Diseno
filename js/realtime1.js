
var intevalo1;
var entro=0;
var map2;
intevalo1 = setInterval(function(){initMap()},5000);
var map;
var total = 0;
var markerArray = [];
var routes2 = [];
var j = 0;
var tamaño;


function initMap() {
	var date1 = fecha1.value;
    var date2 = fecha2.value;
    //$.post("server/vivoh.php",{fechita: date1,fechita2: date2},function(respuesta){
    //	alert(respuesta);
    //});

	//$.post("server/vivoh")
	$.post("server/vivoh.php",{fechita: date1,fechita2: date2},function(respuesta) {
     /*bueno para que accedan a cada una de las filas de las tablas es así:*/
     //Tabla_MySql = JSON.parse(respuesta);
   	 //console.log(Tabla_MySql[0].Latitud);
   	 //console.log(Tabla_MySql[0].Longitud);
   	 // console.log(Tabla_MySql[0].Latitud);
   	 // console.log(Tabla_MySql[0].Longitud);
   	 
   	 console.log(date1);
   	 console.log(date2);

   	   var prueba1 = JSON.parse(respuesta);
       tamaño = prueba1.length
       console.log(tamaño);
       var lat, lon;

       for (var j in prueba1) {
           var myLatLng = {lat: parseFloat(prueba1[j].Latitud), lng: parseFloat(prueba1[j].Longitud)};
           lat = parseFloat(prueba1[j].Latitud);
           lon = parseFloat(prueba1[j].Longitud);
           routes2[j] =  new google.maps.LatLng(lat,lon);
           j=j+1;
        }
       
	  if(entro==0){
          map2 = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          zoom: 15});
        }
      entro=1;


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
        j=j+1;
        for (var i = 0; i < markerArray.length; i++) {
             markerArray[i].setMap(null);
            };
        markerArray= [];
        markerArray.push(marker);

    });
}