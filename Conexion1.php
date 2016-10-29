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

$sql = "SELECT velocidad FROM  `mediciones` ORDER BY idmediciones DESC LIMIT 1";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	
        echo "<h3>La velocidad del vehículo es: </h3><h2>" . $row["velocidad"] . " Km/h</h2><br>" ;
    }
} else {
    echo "No hay medicion registrada";
}

$conn->close();
}
}
?>
