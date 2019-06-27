<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Inventory";
$model = filter_input(INPUT_POST,'model');
$description = filter_input(INPUT_POST,'description');
$pcn = filter_input(INPUT_POST,'pcn');
$serial = filter_input(INPUT_POST,'serial');
$area = filter_input(INPUT_POST,'area');
$calibration = filter_input(INPUT_POST,'calibration');
$notes = filter_input(INPUT_POST,'notes');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "DELETE FROM ESDInventory";
if($conn->query($sql)){
	echo "New Record Created";
}
else{
	echo "error";
}

header("Location: index.php");
$conn->close();
?>