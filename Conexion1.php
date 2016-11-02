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

$sql = "SELECT Velocidad FROM  `coordenadas` ORDER BY ID DESC LIMIT 1";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    		if ($row["Velocidad"] == '0'){
        // echo "<h4>La velocidad del vehículo es:</h4><h2>" . $row["Velocidad"] . " Km/h</h2>" ;
				echo "<font color = "#24AAFF"><h4> Puerta del contenedor abierta </h4></font>";
				}
				if ($row["Velocidad"] == '11'){
				echo "<h4> Puerta del contenedor cerrada </h4>";
				}
    }
} else {
    echo "No hay medicion registrada";
}

$conn->close();
}
}
?>
