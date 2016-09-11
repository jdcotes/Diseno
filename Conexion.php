<?php
class conexion{
	function recuperarDatos(){

$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "disenouninorte";

// Create connectionnn
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT SUBSTRING( FechaGPS, 1, 10) AS FECHA, SUBSTRING( FechaGPS, 12, 8) AS HORA
FROM coordenadas
ORDER BY FechaGPS DESC 
LIMIT 1";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        $file = fopen("Fecha.txt", "w");
		fwrite($file, "Esto es una nueva linea de texto" . PHP_EOL);
		fclose($file);

        echo "Fecha: " . $row["FECHA"] . "<br>". "Hora: " . $row["HORA"]. "<br>";
        
    }
} else {
    echo "0 results";
}

$conn->close();
}
}
?>




