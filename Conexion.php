<?php
class conexion{
	function recuperarDatos(){

$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "disenouninorte";
$cero = $_POST['id'];
// Create connectionnn
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT SUBSTRING( FechaGPS, 1, 10) AS FECHA, SUBSTRING( FechaGPS, 12, 8) AS HORA
FROM coordenadas
WHERE IDvehiculo = '$cero'
ORDER BY FechaGPS DESC 
LIMIT 1";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	
        echo '<b>'."Fecha: ".'</b>'. $row["FECHA"] .'<b>'. "  Hora: " .'</b>'. $row["HORA"]. '<br>';
    }
} else {
    echo "Fecha no registrada";
}

$conn->close();
}
}
?>




