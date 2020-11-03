<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<base href="<?php echo site_url();?>">
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
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
	  position: relative;
	  background-color: #f9f9f9;
	  max-width: 100%;
	  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	  z-index: 1;
		overflow: auto;
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

		.button {
	  border: none;
	  color: white;
	  text-align: center;
	  text-decoration: none;
	  display: block;
	  font-size: 16px;
	  margin: 4px 2px;
	  cursor: pointer;
	}

	.button1 {
		 background-color: #f9f9f9;
  		color: black;
	}

	.button1:hover {
  background-color: #4CAF50;
  color: white;
	}

	.button2 {
  background-color: white;
  color: black;
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

	.button3 {
		background-color: white;
		color: black;
		border: 2px solid #FF5733;
	}

	.button3:hover {
	  background-color: #FF5733;
	  color: white;
	}



	</style>
</head>
<body>


<div class="navbar">
	<a href="#home">Home</a>

	<div class="dropdown">

		<button class="dropbtn" onclick="myFunction(1)">Brand <i class="fa fa-caret-down"></i>
		</button>

		<div class="dropdown-content" id= 1>
			<button class="button button1" onclick = "setBrand('Intel')">Intel</button>
			<button class="button button1" onclick = "setBrand('AMD')">AMD</button>
		</div>

	</div>

	<div class="dropdown">
			<button class="dropbtn" onclick="myFunction(2)">Product Generation
				<i class="fa fa-caret-down"></i>
			</button>

			<div class="dropdown-content" id= 2>
				<button class="button button1" onclick = "setPG('9th Gen Intel Core')">9th Gen Intel Core</button>
				<button class="button button1" onclick = "setPG('10th Gen Intel Core')">10th Gen Intel Core</button>
				<button class="button button1" onclick = "setPG('AMD Ryzen 3000 Series')">AMD Ryzen 3000 Series</button>
				<button class="button button1" onclick = "setPG('AMD Ryzen 4000 Series')">AMD Ryzen 4000 Series</button>
				<button class="button button1" onclick = "setPG('AMD Ryzen 5000 Series')">AMD Ryzen 5000 Series</button>
			</div>

	</div>

	<div class="dropdown">
			<button class="dropbtn" onclick="myFunction(3)">Product Level
				<i class="fa fa-caret-down"></i>
			</button>

			<div class="dropdown-content" id= 3>
				<button class="button button1" onclick = "setPL('i3')">i3</button>
				<button class="button button1" onclick = "setPL('i5')">i5</button>
				<button class="button button1" onclick = "setPL('i7')">i7</button>
				<button class="button button1" onclick = "setPL('i9')">i9</button>
				<button class="button button1" onclick = "setPL('R3')">R3</button>
				<button class="button button1" onclick = "setPL('R5')">R5</button>
				<button class="button button1" onclick = "setPL('R7')">R7</button>
				<button class="button button1" onclick = "setPL('R9')">R9</button>
			</div>
	</div>

	<div class="dropdown">
			<button class="dropbtn" onclick="myFunction(4)">CPU Power Level
				<i class="fa fa-caret-down"></i>
			</button>

			<div class="dropdown-content" id= 4>
				<button class="button button1" onclick = "setCPL('Overclock')">Overclock</button>
				<button class="button button1" onclick = "setCPL('Regular')">Regular</button>
				<button class="button button1" onclick = "setCPL('Low Power')">Low Power</button>
			</div>
	</div>

	<div class="dropdown">
			<button class="dropbtn" onclick="myFunction(5)">Core Graphics
				<i class="fa fa-caret-down"></i>
			</button>

			<div class="dropdown-content" id= 5>
				<button class="button button1" onclick = "setCG(true)">True</button>
				<button class="button button1" onclick = "setCG(false)">FALSE</button>
			</div>
	</div>

</div>

<div id="container">
	<h1>Select the type of hardware you want to <b>Search, Update, or delete</b> in the <b style="color:grey">Hardware</b> menu</h1>


	<button class="button button2" onclick="passVar()" style="margin:10px; ">Query</button>
	<button class="button button3" onclick="reset()" style="margin:10px; ">Reset</button>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction(drpbtn_name) {
	document.getElementById(drpbtn_name).classList.toggle("show");
}
</script>

<script>
var brand_Name = "";
var product_Gen = "";
var product_Level = "";
var cpu_PL = "";
var core_g = "";
function setBrand(brandName){
	brand_Name = brandName;
	console.log(brand_Name)
}

function setPG(productGen) {
	product_Gen = productGen;
	console.log(product_Gen)
}

function setPL(productLevel){
	product_Level = productLevel;
	console.log(product_Level)
}

function setCPL(cpuPowerLevel) {
	cpu_PL = cpuPowerLevel;
	console.log(cpu_PL)
}

function setCG(coreGrahphic) {
	core_g = coreGrahphic;
	console.log(core_g)
}


function passVar() {
		$.ajax({
	 url: "/DIYComputer/cpu",
	 	data: {
			brand_Name:brand_Name,
		 	product_Gen:product_Gen,
		 	product_Level:product_Level,
	 		cpu_PL:cpu_PL,
		 	core_g:core_g},
	 success: function(data) {
		 	console.log(data);
	 }

	});
}

function reset() {
	 brand_Name = "";
	 product_Gen = "";
	 product_Level = "";
	 cpu_PL = "";
	 core_g = "";
}

</script>
























</body>
</html>
