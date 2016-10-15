			
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
var prueba;
//intevalo1 = setInterval(function(){mapa1()},5000);



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

  for (var j in prueba){
    color = polycolor[j];
    id = vehi[j];
    mapa1();
    if (j==0){
      mapa1();
    }
    if (j==1){
      mapa2();
    }
    j=j+1;
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

   $.post("server/vivo.php",{movil: id},function(respuesta) {
    /*bueno para que accedan a cada una de las filas de las tablas es así:*/
    Tabla_MySql = JSON.parse(respuesta);
        console.log("hola");
       var prueba2 = JSON.parse(respuesta);
       var lat, lon;
        for (var j in prueba2) {
            var myLatLng = {lat: parseFloat(prueba2[j].Latitud), lng: parseFloat(prueba2[j].Longitud)};
            lat = parseFloat(prueba2[j].Latitud);
            lon = parseFloat(prueba2[j].Longitud);
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
          routes3[a] = new google.maps.LatLng(lat,lon);
          latold=lat;
          longold=lon;
          myLatLng = new google.maps.LatLng(lat,lon);
          a = a + 1;
         
        }
                         
        var polyline = new google.maps.Polyline({
          path: routes3
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
           markerArray2[i].setMap(null);
         };
        markerArray2= [];
        markerArray2.push(marker );
    
     });
 }