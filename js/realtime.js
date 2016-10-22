
var intevalo1;
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
intevalo1 = setInterval(function(){caronmap()},5000);

document.getElementById('check0').onchange = function() {
    if ( document.getElementById('check0').checked === true ) {
        //planhide();
				console.log("Prueba exitosa");
    }
};​

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
    caronmap();
  });
function caronmap(){

  for ( h in prueba){


    if (h==0){
    color = polycolor[h];
    console.log(color);
    id = vehi[h];
      mapa1();
    }
    if (h==1){
    color1 = polycolor[h];
    console.log(color1);
    id1 = vehi[h];
      mapa2();
    }
    h=h+1;
  }

}

 function mapa1(){

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
           if(entro==0)
           {
            map2 = new google.maps.Map(document.getElementById('map'), {
           zoom: 15,
           center: myLatLng
            });
            entro=1;
           }

           if ((Math.abs(lat-latold)>0.00001) || (Math.abs(lon-longold)>0.00001)){
            routes2[a] = new google.maps.LatLng(lat,lon);
            latold=lat;
            longold=lon;
            myLatLng = new google.maps.LatLng(lat,lon);
            a = a + 1;

          }

          var polyline = new google.maps.Polyline({
            path: routes2
            , map: map2
            , strokeColor: color
            , strokeWeight: 5
            , strokeOpacity: 1
            , clickable: false
          });
            var marker = new google.maps.Marker({
            position: myLatLng,
            map: map2,
            title: id.toString()
          });

           for (var i = 0; i < markerArray.length; i++) {
             markerArray[i].setMap(null);
           };
          markerArray= [];
          markerArray.push(marker );

       });
  }
 function mapa2(){

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

        var polyline = new google.maps.Polyline({
          path: routes3
          , map: map2
          , strokeColor: color1
          , strokeWeight: 5
          , strokeOpacity: 1
          , clickable: false
        });
          var marker = new google.maps.Marker({
          position: myLatLng,
          map: map2,
          title: id1.toString()
        });

         for (var i = 0; i < markerArray2.length; i++) {
           markerArray2[i].setMap(null);
         };
        markerArray2= [];
        markerArray2.push(marker );

     });
 }
