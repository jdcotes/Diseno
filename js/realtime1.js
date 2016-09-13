
var intevalo1;
var entro=0;
var map2;
//intevalo1 = setInterval(function(){initMap()},5000);
var map;
var total = 0;
var markerArray = [];
var routes2 = [];
var j = 0;
var tamaño;
var verificar = 0;
var patha = null;   // Evitar repintado
var latold;
var longold;

map2 = new google.maps.Map(document.getElementById('map'), {
center:{lat: 11.01999, lng: -74.8509},
zoom: 15});

	        var polyline = new google.maps.Polyline({
	         path: routes2,
	         map: map2, 
	         strokeColor: '#143254', 
	         strokeWeight: 5, 
	         strokeOpacity: 1, 
	         clickable: false
	        });

function initMap() {

    routes2 = [];
	polyline.setMap(null);
	var date1 = fecha1.value;
    var date2 = fecha2.value;
    var time1 = Desde.value;
    var time2 = Hasta.value;
    //$.post("server/vivoh.php",{fechita: date1,fechita2: date2,horita: time1, horita2: time2},function(respuesta){
    //	alert(respuesta);
    //});
	//$.post("server/vivoh")
	 $.post("server/vivoh.php",{fechita: date1,fechita2: date2,horita: time1, horita2: time2},function(respuesta) {
     /*bueno para que accedan a cada una de las filas de las tablas es así:*/
     //Tabla_MySql = JSON.parse(respuesta);
   	 //console.log(Tabla_MySql[0].Latitud);
   	 //console.log(Tabla_MySql[0].Longitud);
   	 // console.log(Tabla_MySql[0].Latitud);
   	 // console.log(Tabla_MySql[0].Longitud);
   	 // Exclusivo desarrollador //
   	    console.log(date1);
   	    console.log(date2);
   	    console.log(time1);
   	    console.log(time2);
   	 // -----------------------//

   	   var prueba1 = JSON.parse(respuesta);
       tamaño = prueba1.length
       console.log(tamaño);
       var lat, lon;
       console.log(prueba1);
       // LLenado de vector prueba 1 con la consulta realizada //

       for (var j in prueba1) {
       	   //console.log(j);
           var myLatLng = {lat: parseFloat(prueba1[j].Latitud), lng: parseFloat(prueba1[j].Longitud)};
           lat = parseFloat(prueba1[j].Latitud);
           lon = parseFloat(prueba1[j].Longitud);
           console.log(lat);
           console.log(lon);
          routes2[j] = new google.maps.LatLng(lat,lon);
	        // if (j == 0) {
	        // 	latold = 0;
	        // 	longold = 0; 	
	        //     routes2[j] = new google.maps.LatLng(lat,lon);
	        // } 
	        // if (j>0) {
	        
	        // if ((Math.abs(lat-latold)>0.0003) || (Math.abs(lon-longold)>0.0003)){
	        // 	routes2[j] = new google.maps.LatLng(lat,lon);
	        //     latold=lat;
	        //     longold=lon;
	        // }
	        // }
         //   j=j+1;
       }
        console.log(routes2);
       // Condicional para cuando la consulta devuelve 0 datos //

       if(verificar==0 && tamaño==0){
          map2 = new google.maps.Map(document.getElementById('map'), {
          center:{lat: 11.01999, lng: -74.8509},
          zoom: 15});
          verificar=1;
          console.log("hola");
        }

       // Cargar una sola vez el mapa cuando se realiza la primera consulta //

	  if(entro==0 && tamaño>0){
          map2 = new google.maps.Map(document.getElementById('map'), {
          center:myLatLng,
          zoom: 15});
          console.log("aqui estoy");
          entro=1;
        }
      // Pintado de polilinea y establecer ubicación de marcador //
            

	    if(tamaño>0){
	         polyline = new google.maps.Polyline({
	         path: routes2,
	         map: map2, 
	         strokeColor: '#143254', 
	         strokeWeight: 5, 
	         strokeOpacity: 1, 
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
	    }  
	           
  });
}