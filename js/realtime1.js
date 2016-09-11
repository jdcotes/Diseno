
var intevalo1;
var entro=0;
var map2;
var Tabla_MySql;
intevalo1 = setInterval(function(){initMap()},5000);
var map;
function initMap() {
	$.post("server/vivo.php",function(respuesta) {
     /*bueno para que accedan a cada una de las filas de las tablas es así:*/
     Tabla_MySql = JSON.parse(respuesta);
   	 console.log(Tabla_MySql[0].Latitud);
   	 console.log(Tabla_MySql[0].Longitud);
   	 // console.log(Tabla_MySql[0].Latitud);
   	 // console.log(Tabla_MySql[0].Longitud);
	  if(entro==0){
          map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 10.963889, lng: -74.796389},
          zoom: 15});
        }
     entro=1;
   });
}