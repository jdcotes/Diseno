			
var intevalo1;
var entro=0;
var map2;
var Tabla_MySql;

intevalo1 = setInterval(function(){mapa1()},5000);

var markerArray =[],total=0;
var routes2=[];
var latold = 0;
var longold = 0;
var a = 0;
var myLatLng;

              var tamano;
              var vehi = [];
              var i;

        $.post("server/vivoi.php",function(respuesta) {
          
          var prueba = JSON.parse(respuesta);
                    tamano = prueba.length

                    for (var j in prueba) {

              vehi[j] = parseFloat(prueba[j].IDvehiculo);
            
              j=j+1;
            }

        });
        
        //function radiocreate(){ 
        console.log("no entro"); 
          for ( var i = 0; i == tamano; i++){
          console.log("creado");
              var node = document.createElement('div');        
              node.innerHTML = '<input type="checkbox" id="check'+i+'" name="check'+i+'"><label for="check'+i+'"> Vehiculo'+ vehi[i]+'</label>';       
              document.getElementById('vehiculos').appendChild(node);

              }

 function mapa1(){
     
     $.post("server/vivo.php",function(respuesta) {
     	/*bueno para que accedan a cada una de las filas de las tablas es así:*/
      Tabla_MySql = JSON.parse(respuesta);
 
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
                           
            //routes2[total] =  new google.maps.LatLng(lat,lon);
           //total=total+1;
           var polyline = new google.maps.Polyline({
            path: routes2
            , map: map2
            , strokeColor: '#ff0000'
            , strokeWeight: 5
            , strokeOpacity: 1
            , clickable: false
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
          markerArray.push(marker );
      
       });
  }