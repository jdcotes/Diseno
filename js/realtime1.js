
var intevalo1;
var entro=0;
var map2;
var map;
var total = 0;
var markerArray = [];
var routes2 = [];
var markerdate = [];
var j = 0;
var tamaño;
var verificar = 0;
var latold = 0;
var longold = 0;
var a = 0;
var longitud
var marker
var dates = 0; //Variable control fecha 1 mayor fecha 2
var times = 0; //Variabel control times 1 mayor que times 2
var datesc =0; //Variable control cuando no se ingresan fechas
var cor ="#33cc33";
//COLOR #33cc33 verde

//Mapa inicial al cargar página
map2 = new google.maps.Map(document.getElementById('map'), {
center:{lat: 11.01999, lng: -74.8509},
zoom: 13});
//Inicio de polilinea en 0
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
  // Extraccion datos pagina históricos
  var car = Carro.value; // Se determina que vehiculo se quiere visualizar
  var date1 = fecha1.value;
  var date2 = fecha2.value;
  var time1 = Desde.value;
  var time2 = Hasta.value;

  if (car==2){
    cor="#33CCCC";
  }
  else {
    var cor ="#33cc33";
  }
  dates=0;
  times=0;
  datesc=0;
  //Alertas posibles errores de ingreso de datos
  if (date1=="" && date2==""){
    alert("Necesario ingresar fechas para realizar la consulta");
    datesc=1;
  }
  if (date2 == ""){
    date2=date1;
  }
  if (date1 > date2){
    alert("Consulta no realizada. Verificar fechas ingresadas.");
    dates = 1;
  }
  if (date1 == date2){
    if (time1 > time2){
      alert("Consulta no realizada. Hora inicial debe ocurrir antes.");
      times =1;
    }
  }
    //Consulta base de datos para procesar datos.
  if (dates== 0 && times == 0 && datesc == 0){

    $.post("server/vivoh.php",{auto: car,fechita: date1,fechita2: date2,horita: time1, horita2: time2},function(respuesta) {
    entro = 0;
    var prueba1 = JSON.parse(respuesta);
    tamaño = prueba1.length;
    var lat, lon;

    // LLenado de vector prueba 1 con la consulta realizada //
    for (var j in prueba1) {

      var myLatLng = {lat: parseFloat(prueba1[j].Latitud), lng: parseFloat(prueba1[j].Longitud)};
      lat = parseFloat(prueba1[j].Latitud);
      lon = parseFloat(prueba1[j].Longitud);
      DateGps = (prueba1[j].FechaGPS);

     // Condición para dibujado, evitar saltos cuando está detenido el vehiculo
      if ((Math.abs(lat-latold)>0.00001) || (Math.abs(lon-longold)>0.00001)){
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
    longitud = routes2.length;

     //Consulta con 0 resultados
     if (longitud == 0){
         alert("No hay datos entre los límites establecidos");
     }
    // Condicional para cuando la consulta devuelve 0 datos //

    if(verificar==0 && tamaño==0){
      map2 = new google.maps.Map(document.getElementById('map'), {
      center:{lat: 11.01999, lng: -74.8509},
      zoom: 13});
      verificar=1;
    }
    // Cargar una sola vez el mapa cuando se realiza la primera consulta //

    if(entro==0 && tamaño>0){
      map2 = new google.maps.Map(document.getElementById('map'), {
      center:myLatLng,
      zoom: 13});
      entro = 1;
      control = 0;
    }
    // Pintado de polilinea y establecer ubicación de marcador //

    if(tamaño>0){
      polyline = new google.maps.Polyline({
      path: routes2,
      map: map2,
      strokeColor: cor,
      strokeWeight: 5,
      strokeOpacity: 1,
      clickable: false});
      marker = new google.maps.Marker({
        position: myLatLng,
        map: map2,
        title: markerdate[longitud-1]
       });
    }
    //Hacer visble el slider y los botones disponibles para el desplazamiento
    var w = document.querySelector("#slider");
    w.setAttribute("style","display: inline");
    var z = document.querySelector("#fordward");
    z.setAttribute("style","display: inline");
    var y = document.querySelector("#backward");
    y.setAttribute("style","display: inline");

    });
  }
}

var routes3 = routes2;
//Dibuja el marcador en la posicion indicada por el slider
function DrawMarker(){
  // Establecer atributos como maximo y minímo del slider
  marker.setMap(null);
  var x = document.querySelector("#slider");
  x.setAttribute("min","0");
  x.setAttribute("max",longitud - 1);
  var slide = slider.value;
  var label = markerdate[slide].split(" ");
  document.getElementById("beendate").innerHTML = label[0];
  document.getElementById("beentime").innerHTML = label[1];
    marker = new google.maps.Marker({
    position: routes2[slide],
    map: map2,
    title: markerdate[slide]
});

}
//Aumenta valor slider al presionar el boton mas. Muev eel slider
function Forward(){
var u = document.querySelector("#slider");
var slide = slider.value;
var now = parseInt(slide);
u.setAttribute("value",now+1);
DrawMarker();
var q = document.querySelector("#infor");
q.setAttribute("style","display: block");

}
// Disminuye valor slider al preisonar el boton menos. Mueve el slider
function Backward(){
var v = document.querySelector("#slider");
var slide = slider.value;
var now = parseInt(slide);
v.setAttribute("value",now-1);
DrawMarker();
var q = document.querySelector("#infor");
q.setAttribute("style","display: block");
}
