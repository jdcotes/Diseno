
var intevalo1;
var intevalo2;
var entro=0;
var map2;
var Tabla_MySql;
var markerArray = [], total = 0;
var markerArray2 = []
var routes2 = [];
var routes3 =[];
var latold = 0;
var longold = 0;
var a = 0;
var myLatLng;
var polycolor = [];
var vehi = [];
var color;
var id;
var color1;
var id1;
var prueba;
var h;
var latold1 = 0;
var longold1 = 0;
var b = 0;
var marker;
var marker1;
var polyline;
var polylineold;
var polyline1;
var polyline1old;
//Inicio de polilinea en 0
var polyline = new google.maps.Polyline({
  path: routes2,
  map: map2,
  strokeColor: '#143254',
  strokeWeight: 5,
  strokeOpacity: 1,
  clickable: false
});
//Inicio de polilinea en 0
var polylineold = new google.maps.Polyline({
  path: routes2,
  map: map2,
  strokeColor: '#143254',
  strokeWeight: 5,
  strokeOpacity: 1,
  clickable: false
});

//Inicio de polilinea en 0
var polyline1 = new google.maps.Polyline({
  path: routes3,
  map: map2,
  strokeColor: '#143254',
  strokeWeight: 5,
  strokeOpacity: 1,
  clickable: false
});
//Pintado inicial del mapa tiempo real
map2 = new google.maps.Map(document.getElementById('map'), {
zoom: 13,
center: {lat: 10.963889, lng: -74.796389}});

function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++ ) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

  $.post("server/vivoi.php",function(respuesta) {

    prueba = JSON.parse(respuesta);
    tamano = prueba.length

    for (var j  in prueba) {
      polycolor[j]= getRandomColor();
      vehi[j] = parseFloat(prueba[j].IDvehiculo);
      j=j+1;
    }
  });

function car1onmap(){
	color = polycolor[0];
	console.log(color);
	id = vehi[0];
		mapa1();
}

function car2onmap(){
	color1 = polycolor[1];
	console.log(color1);
	id1 = vehi[1];
		mapa2();
}

 function mapa1(){
      polylineold.setMap(null);
      polyline =[];
     $.post("server/vivo.php",{movil: id},function(respuesta) {
     	/*bueno para que accedan a cada una de las filas de las tablas es así:*/
      Tabla_MySql = JSON.parse(respuesta);
          console.log("hola");
         var prueba1 = JSON.parse(respuesta);
         var lat, lon;
          for (var j in prueba1) {
              myLatLng = {lat: parseFloat(prueba1[j].Latitud), lng: parseFloat(prueba1[j].Longitud)};
              lat = parseFloat(prueba1[j].Latitud);
              lon = parseFloat(prueba1[j].Longitud);
             }

           if ((Math.abs(lat-latold)>0.00001) || (Math.abs(lon-longold)>0.00001)){
            routes2[a] = new google.maps.LatLng(lat,lon);
            latold=lat;
            longold=lon;
            myLatLng = new google.maps.LatLng(lat,lon);
            a = a + 1;

          }
          console.log(routes2);
          console.log(polyline);
          polyline = new google.maps.Polyline({
            path: routes2
            , map: map2
            , strokeColor: color
            , strokeWeight: 5
            , strokeOpacity: 1
            , clickable: false
          });
          polylineold=polyline;
            marker = new google.maps.Marker({
            position: myLatLng,
            map: map2,
            title: id.toString()
          });

           for (var i = 0; i < markerArray.length; i++) {
             markerArray[i].setMap(null);
           };
          markerArray= [];
          markerArray.push(marker);

       });

  }
 function mapa2(){
   polyline1.setMap(null);
   polyline1=[];
   $.post("server/vivo.php",{movil: id1},function(respuesta) {
    /*bueno para que accedan a cada una de las filas de las tablas es así:*/
    Tabla_MySql = JSON.parse(respuesta);
        console.log("hola1");
       var prueba2 = JSON.parse(respuesta);
       var lat, lon;
        for (var j in prueba2) {
            var myLatLng = {lat: parseFloat(prueba2[j].Latitud), lng: parseFloat(prueba2[j].Longitud)};
            lat = parseFloat(prueba2[j].Latitud);
            lon = parseFloat(prueba2[j].Longitud);
           }

         if ((Math.abs(lat-latold1)>0.00001) || (Math.abs(lon-longold1)>0.00001)){
          routes3[b] = new google.maps.LatLng(lat,lon);
          latold1=lat;
          longold1=lon;
          myLatLng = new google.maps.LatLng(lat,lon);
          b = b + 1;

        }

        polyline1 = new google.maps.Polyline({
          path: routes3
          , map: map2
          , strokeColor: color1
          , strokeWeight: 5
          , strokeOpacity: 1
          , clickable: false
        });
          marker1 = new google.maps.Marker({
          position: myLatLng,
          map: map2,
          title: id1.toString()
        });

         for (var i = 0; i < markerArray2.length; i++) {
           markerArray2[i].setMap(null);
         };
        markerArray2= [];
        markerArray2.push(marker1);

     });
 }
