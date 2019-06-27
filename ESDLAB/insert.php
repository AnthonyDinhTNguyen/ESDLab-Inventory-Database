<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Inventory";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//Prepare Statement
$stmt = $conn->prepare("INSERT INTO ESDInventory (model, description, pcn, serial, area, calibration) VALUES (?,?,?,?,?,?)");
$stmt->bind_param("ssssss", $model, $description, $pcn, $serial, $area, $calibration);

$model = filter_input(INPUT_POST,'model');
$description = filter_input(INPUT_POST,'description');
$pcn = filter_input(INPUT_POST,'pcn');
$serial = filter_input(INPUT_POST,'serial');
$area = filter_input(INPUT_POST,'area');
$calibration = filter_input(INPUT_POST,'calibration');

$stmt->execute();
$stmt->close();
header("Location: index.php");
$conn->close();
?>