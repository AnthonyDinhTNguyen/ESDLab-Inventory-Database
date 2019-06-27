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
				<h1><i class="fa fa-rocket"></i> <span class="highlight"> MOOG</span> ESD Lab Inventory</h1>
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
				<button onclick="showCheckout()" href="#">Checkout Item</button>
				<button onclick="showReturn()">Return Item</button>
			</div>
		</div>
		<form action="checkout.php" method="post" id = "checkoutForm">
			<h1>Checkout Item By Serial Number or PCN</h1>
			PCN#: <input type="text" name="pcn"><br>
			Serial#: <input type="text" name="serial"><br>
			New Location: <input type="text" name ="area"><br>
			Your Name: <input type = "text" name ="name"><br>
			Today's Date:<input type = "date" name = "checkoutDate"><br>
			<input type="submit" value="Checkout">
		</form>
		<form action="return.php" method="post" id = "returnForm">
			<h1>Return Item By Serial Number or PCN</h1>
			PCN#: <input type="text" name="pcn"><br>
			Serial#: <input type="text" name="serial"><br>
			Today's Date:<input type = "date" name = "returnDate"><br>
			<input type="submit" value="Return">
		</form>
		<!--<form action="insert.php" method="post" id = "newItemForm">
			Manufacture/Model: <input type="text" name="model"><br>
			Item Description:  <input type="text" name="description"><br>
			PCN#: <input type="text" name="pcn"><br>
			Serial#: <input type="text" name="serial"><br>
			Location: <input type="text" name="area"><br>
			Calibration Due Date: <input type="date" name="calibration"><br>
			<input type="submit" value="Insert">
		</form>
		<form action="delete.php" method="post" id="deleteForm">
			<input type = "submit" value = "DELETE AN ENTRY">
		</form>-->
		<?php include 'backend.php';?>
	</body>
</html>
