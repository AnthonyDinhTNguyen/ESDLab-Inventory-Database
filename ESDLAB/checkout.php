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
$stmt = $conn->prepare("UPDATE ESDInventory SET name = ?, checkoutDate = ?, area = ?, returnDate='' WHERE serial = ? OR pcn = ?");
$stmt->bind_param("sssss", $name, $checkoutDate, $area, $serial, $pcn);

$name = filter_input(INPUT_POST,'name');
$checkoutDate = filter_input(INPUT_POST,'checkoutDate');
$pcn = filter_input(INPUT_POST,'pcn');
$serial = filter_input(INPUT_POST,'serial');
$area = filter_input(INPUT_POST,'area');
$continue = true;
if(empty($name)){
	$continue = false;
	echo "Please Enter Your Name<br>";
}
if(empty($checkoutDate)){
	$continue = false;
	echo "Please Enter Today's Date<br>";
}
if (empty($area)){
	$continue = false;
	echo "Please Enter Where You Are Taking the Item<br>";
	}
if(empty($pcn)&&empty($serial)){
	$continue = false;
	echo "Please Enter Either a PCN or Serial Number<br>";
}
if($continue){
$stmt->execute();
header("Location: index.php");
}
$stmt->close();
$conn->close();
?>
<html>
<body>
<a href="index.php">Click to return home</a>
</body>
</html>