<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<base href="<?php echo site_url();?>">
	<style type="text/css">

	::selection { background-color: grey; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 20px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}


	#body {
		margin: 0 15px 0 15px;
	}



	#container {
		margin: 1px;

		box-shadow: 0 0 8px #D0D0D0;
	}
/* dropdown*/

	.navbar {
	  overflow: hidden;
	  background-color: #333;
	  font-family: Arial, Helvetica, sans-serif;
	}

	.navbar a {
	  float: left;
	  font-size: 16px;
	  color: white;
	  text-align: center;
	  padding: 14px 16px;
	  text-decoration: none;
	}

	.dropdown {
	  float: left;
	  overflow: hidden;
	}

	.dropdown .dropbtn {
	  cursor: pointer;
	  font-size: 16px;
	  border: none;
	  outline: none;
	  color: white;
	  padding: 14px 16px;
	  background-color: inherit;
	  font-family: inherit;
	  margin: 0;
	}

	.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
	  background-color: grey;
	}

	.dropdown-content {
	  display: none;
	  position: absolute;
	  background-color: #f9f9f9;
	  min-width: 160px;
	  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	  z-index: 1;
	}

	.dropdown-content a {
	  float: none;
	  color: black;
	  padding: 12px 16px;
	  text-decoration: none;
	  display: block;
	  text-align: left;
	}

	.dropdown-content a:hover {
	  background-color: #ddd;
	}

	.show {
	  display: block;
	}
	</style>
</head>
<body>
<div class="navbar">
	<a href="#home">Home</a>
	<div class="dropdown">
	<button class="dropbtn" onclick="myFunction()">Harware
		<i class="fa fa-caret-down"></i>
	</button>
	<div class="dropdown-content" id="myDropdown">
		<a href="#">CPU</a>
		<a href="#">Motherboard</a>
		<a href="#">Memory</a>
		<a href="#">GPU</a>
		<a href="#">SSD</a>
		<a href="#">HDD</a>
		<a href="#">Case</a>
		<a href="#">Power Supply</a>
	</div>
	</div>
</div>

<div id="container">
	<h1>Select the type of hardware you want to <b>Search, Update, or delete</b> in the <b style="color:grey">Hardware</b> menu</h1>
</div>
<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
	document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
	if (!e.target.matches('.dropbtn')) {
	var myDropdown = document.getElementById("myDropdown");
		if (myDropdown.classList.contains('show')) {
			myDropdown.classList.remove('show');
		}
	}
}
</script>



















</body>
</html>
