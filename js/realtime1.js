			
var intevalo1;
var entro=0;
 var map2;
   var Tabla_MySql;
 //intevalo1 = setInterval('mapa1()',11000);
 intevalo1 = setInterval(function(){mapa1()},30000);
        // mapa1();

 function mapa1(){
     
     


     	// console.log(Tabla_MySql[0].Fecha);
     	// console.log(Tabla_MySql[0].Hora);
     	// console.log(Tabla_MySql[0].Latitud);
     	// console.log(Tabla_MySql[0].Longitud);

         
           
            map2 = new google.maps.Map(document.getElementById('map'), {
           zoom: 15,
           center: {lat: -34.397, lng: 150.644}
            }
            
          
           
           
           
      
       };
  