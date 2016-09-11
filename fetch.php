<?php

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


$sql = "SELECT FechaGPS FROM `coordenadas` order by FechaGPS DESC limit 1";
$result = array();

while ( $row = mysql_fetch_array($res))
	array_push($result, array('FechaGPS' => $row[0]));

echo json_encode((array("result" => $result));

?>




