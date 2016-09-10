<?php
class conexion{
	function recuperarDatos(){

  $servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "disenouninorte";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Fecha, Hora FROM `coordenadas` order by fecha DESC limit 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Fecha: " . $row["Fecha"]. " - Hora: " . $row["Hora"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
}
}
?>




