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
$stmt = $conn->prepare("UPDATE ESDInventory SET model = ?, description = ?, calibration = ?, name = ?, checkoutDate = ?, area = ?, returnDate=? WHERE serial = ? OR pcn = ?");
$stmt->bind_param("sssssssss", $model, $description, $calibration, $name, $checkoutDate, $area, $returnDate, $serial, $pcn);

$name = filter_input(INPUT_POST,'name');
$checkoutDate = filter_input(INPUT_POST,'checkoutDate');
$pcn = filter_input(INPUT_POST,'pcn');
$serial = filter_input(INPUT_POST,'serial');
$area = filter_input(INPUT_POST,'area');
$model = filter_input(INPUT_POST,'model');
$description = filter_input(INPUT_POST,'description');
$calibration = filter_input(INPUT_POST,'calibration');
$returnDate = filter_input(INPUT_POST,'returnDate');

$sql = "SELECT model, description, calibration, name, checkoutDate, area, returnDate FROM ESDInventory WHERE serial = '$serial' OR pcn = '$pcn'";
$result = $conn->query($sql);
if ($result->num_rows>0) {
	$row = $result->fetch_assoc();
	if(empty($name)){
		$name = $row['name'];
	}
	if(empty($checkoutDate)){
		$checkoutDate = $row['checkoutDate'];
	}
	if (empty($area)){
		$area = $row['area'];
	}
	if(empty($model)){
		$model = $row['model'];
	}
	if(empty($description)){
		$description = $row['description'];
	}
	if(empty($calibration)){
		$calibration = $row['calibration'];
	}
	if(empty($returnDate)){
		$returnDate = $row['returnDate'];
	}
}
$stmt->execute();
header("Location: managementPage.php");
$stmt->close();
$conn->close();
?>
<html>
<body>
<a href="index.php">Click to return home</a>
</body>
</html>