<?php
//setting header to json
header('Content-Type: application/json');

//database
define('DB_HOST', '127.0.0.1');
define('DB_USERNAME', 'sensorsystem');
define('DB_PASSWORD', '');
define('DB_NAME', 'my_sensorsystem');

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
	die("Connection failed: " . $mysqli->error);
}

//query to get data from the table
$query = sprintf("SELECT tipo, AVG(valore) AS valore FROM datirilevati NATURAL JOIN sensore WHERE id_impianto='1' GROUP BY tipo");

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