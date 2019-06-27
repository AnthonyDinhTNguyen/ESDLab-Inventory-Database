<!DOCTYPE html>
<html>
	<head>
		<title>Moog Aircraft Group | Electrical Engineering</title>
		<link rel="stylesheet" href=".\style.css"
		type="text/css">
	</head>
	<script src="frontEndScripts.js"></script>
	<body>
	    <header>
			<div class="container">
			<div id="branding">
				<h1><i class="fa fa-rocket"></i> <span class="highlight"> MOOG</span> DATABASE MANAGEMENT</h1>
			</div>
			<nav>
				<ul>
					<li class="current"><a href="index.php">Home</a></li>
					<li><a href="managementPage.php">Database Management</a></li>
					<!--<li><a href="services.html">Services</a></li>-->
				</ul>
			</nav>
			</div>
		</header>
		<div class="Select Action">
			<button onclick="myFunction()" class="dropbtn">Select Action</button>
			<div id="myDropdown" class="dropdown-content">
				<button onclick="showInsert()">Create New Entry</button>
				<button onclick="showUpdate()">Update Entry</button>
				<button onclick="showDelete()">Delete Item</button>
			</div>
		</div>
		<form action="insert.php" method="post" id = "newItemForm">
			<h1>Add New Database Entry</h1>
			Manufacture/Model: <input type="text" name="model"><br>
			Item Description:  <input type="text" name="description"><br>
			PCN#: <input type="text" name="pcn"><br>
			Serial#: <input type="text" name="serial"><br>
			Location: <input type="text" name="area"><br>
			Calibration Due Date: <input type="date" name="calibration"><br>
			<input type="submit" value="Insert">
		</form>
		<form action="update.php" method="post" id = "updateForm">
			<h1>Update Existing Database Entry</h1>
			<h2>Enter the PCN or Serial Number of Entry You Want To Update</h2>
			PCN#: <input type="text" name="pcn"><br>
			Serial#: <input type="text" name="serial"><br>
			<h2>Enter the Updated Information</h2>
			Manufacture/Model: <input type="text" name="model"><br>
			Item Description:  <input type="text" name="description"><br>
			Location: <input type="text" name="area"><br>
			Calibration Due Date: <input type="date" name="calibration"><br>
			Last Checked Out By: <input type="text" name="name"><br>
			Checked Out On: <input type="text" name="checkoutDate"><br>
			Returned On: <input type="date" name="returnDate"><br>
			<input type="submit" value="Update">
		</form>
		<form action="delete.php" method="post" id="deleteForm">
			<input type = "submit" value = "DELETE AN ENTRY">
		</form>
		<?php include 'backend.php';?>
	</body>
</html>
