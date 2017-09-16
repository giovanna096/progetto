<?php
//setting header to json
header('Content-Type: application/json');

//database
define('DB_HOST', '127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'progetto');

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
	die("Connection failed: " . $mysqli->error);
}

//query to get data from the table
$query = sprintf("SELECT data AS giorno, valore FROM datirilevati WHERE id_impianto='1' ORDER BY id_sensore");

//execute query
$result = $mysqli->query($query);

//loop through the returned data
$data = array();
if (is_array($result) || is_object($result)){
foreach ($result as $row) {
	$data[] = $row;
}
}

//free memory associated with result
$result->close();

//close connection
$mysqli->close();

//now print the data
print json_encode($data);
?>