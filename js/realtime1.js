
var intevalo1;
var entro=0;
var map2;
//intevalo1 = setInterval(function(){initMap()},5000);
var map;
var total = 0;
var markerArray = [];
var routes2 = [];
var markerdate = []
var j = 0;
var tamaño;
var verificar = 0;
// Evitar repintado
var latold = 0;
var longold = 0;
var a = 0;


map2 = new google.maps.Map(document.getElementById('map'), {
center:{lat: 11.01999, lng: -74.8509},
zoom: 15});

          var scrol = slider.value;
          console.log(scrol);
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
    markerdate = [];
    polyline.setMap(null);
    var date1 = fecha1.value;
    var date2 = fecha2.value;
    var time1 = Desde.value;
    var time2 = Hasta.value;

    //$.post("server/vivoh.php",{fechita: date1,fechita2: date2,horita: time1, horita2: time2},function(respuesta){
    //  alert(respuesta);
    //});
  //$.post("server/vivoh")
  $.post("server/vivoh.php",{fechita: date1,fechita2: date2,horita: time1, horita2: time2},function(respuesta) {

       entro = 0;
       var prueba1 = JSON.parse(respuesta);
       tamaño = prueba1.length
       //console.log(tamaño);
       var lat, lon;
       //console.log(prueba1);
       // LLenado de vector prueba 1 con la consulta realizada //

       for (var j in prueba1) {
           //console.log(j);
           var myLatLng = {lat: parseFloat(prueba1[j].Latitud), lng: parseFloat(prueba1[j].Longitud)};
           lat = parseFloat(prueba1[j].Latitud);
           lon = parseFloat(prueba1[j].Longitud);
           DateGps = (prueba1[j].FechaGPS);
           //console.log(lat);
           //console.log(lon);
           //routes2[j] = new google.maps.LatLng(lat,lon);
           //var prueba = lat-latold;
           //var hola = Math.abs(prueba)
           //console.log(hola);
           //console.log(a);
          if ((Math.abs(lat-latold)>0.0003) || (Math.abs(lon-longold)>0.0003)){
            routes2[a] = new google.maps.LatLng(lat,lon);
            markerdate[a] = DateGps;
            latold=lat;
            longold=lon;
            myLatLng = new google.maps.LatLng(lat,lon);
            a = a + 1;
            }
          
           j=j+1;
       }
       a = 0;
       
       var longitud = routes2.length; 
       // Condicional para cuando la consulta devuelve 0 datos //

       if(verificar==0 && tamaño==0){
          map2 = new google.maps.Map(document.getElementById('map'), {
          center:{lat: 11.01999, lng: -74.8509},
          zoom: 15});
          verificar=1;
        }

       // Cargar una sola vez el mapa cuando se realiza la primera consulta //

    if(entro==0 && tamaño>0){
          map2 = new google.maps.Map(document.getElementById('map'), {
          center:myLatLng,
          zoom: 15});
          entro = 1;
          control = 0;
        }
      // Pintado de polilinea y establecer ubicación de marcador //
            
      if(tamaño>0){
           polyline = new google.maps.Polyline({
           path: routes2,
           map: map2, 
           strokeColor: '#33CCCC', 
           strokeWeight: 5, 
           strokeOpacity: 1, 
           clickable: false
          });

         // var marker = new google.maps.Marker({
         //   position: myLatLng,
         //   map: map2,
         //   title: markerdate[longitud-1]
         //  });
         //   j=j+1;
          // for (var i = 0; i < markerArray.length; i++) {
          //    markerArray[i].setMap(null);
          // };
          // markerArray= [];
          // markerArray.push(marker);
      }  
        
      if (control == 0){
        var x = document.querySelector("#slider");
        x.setAttribute("min","1");
        x.setAttribute("max","longitud");
        control =1;
      }
      var slide = slider.value;
      console.log(slide);      
    });


}