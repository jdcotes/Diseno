<?php //Ejemplo aprenderaprogramar.com, archivo escribir.php
$file = fopen("Fecha.txt", "w");
fwrite($file, "Esto es una nueva linea de texto" . PHP_EOL);
fwrite($file, "Otra más" . PHP_EOL);
fclose($file);
?>