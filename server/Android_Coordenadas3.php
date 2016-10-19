<?php

$file = fopen("archivo.txt","a") // "a" es para crear nuevo archivo o escribir debajo
or die("problemas al crear archivo");

fwrite($file,"Datos\n");
fwrite($file,"\n");
fwrite($file,'$_POST[Id_vehiculo]');
fwrite($file,"\r\n");
fwrite($file,"comentario");
fwrite($file,"\n");
fwrite($file,"----------- \n\n");

fclose($file);

echo "Datos guardados satisfactoriamente";


?>
