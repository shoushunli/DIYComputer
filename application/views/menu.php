<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Welcome to White-Paper's Project</title>
	<base href="<?php echo site_url();?>">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>

	<div class="header">
		<h1>Welcome to White Papers PT1 Admin Demo</h1>
	</div>

	<div class="topnav">
		<div class="dropdown">
			<button class="dropbtn" onclick="myFunction('HardwareDropdown')">Harware
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content" id="HardwareDropdown">
				<a href="home/cpuSearch">CPU</a>
				<a href="#">Motherboard</a>
				<a href="#">Memory</a>
				<a href="#">GPU</a>
				<a href="#">SSD</a>
				<a href="#">HDD</a>
				<a href="#">Case</a>
				<a href="#">Power Supply</a>
			</div>
		</div>

		<div class="dropdown">
			<button class="dropbtn" onclick="myFunction('InsertDropdown')">Insert
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content" id="InsertDropdown">
				<a href="home/cpuInsert">CPU</a>
				<a href="#">Motherboard</a>
				<a href="#">Memory</a>
				<a href="#">GPU</a>
				<a href="#">SSD</a>
				<a href="#">HDD</a>
				<a href="#">Case</a>
				<a href="#">Power Supply</a>
			</div>
		</div>
    <a href="complexQuery/index">Complex Query</a>
		<a href="home/basicFunc">My List</a>
		<a href="home/advFunc">Advanced Function</a>

	</div>

	<script>
		/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
		function myFunction(id) {
			document.getElementById(id).classList.toggle("show");
		}
	</script>

</body>

</html>
