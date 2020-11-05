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


			table {
		  width:100%;
			position: relative;
		}
		table, th, td {
		  border: 1px solid black;
		  border-collapse: collapse;
		}
		th, td {
		  padding: 15px;
		  text-align: center;
		}
		#t01 tr:nth-child(even) {
		  background-color: #eee;
		}
		#t01 tr:nth-child(odd) {
		 background-color: #fff;
		}
		#t01 th {
		  background-color: #333;
		  color: white;
		}

		 .buttonUpdate, .buttonDelete {
			border: 0px;
		  color: white;
			width: 100%;
		  text-align: center;
		  display: table-cell;
		  font-size: 16px;
		  margin: auto;
			padding: 0px;
		  cursor: pointer;
		}

		.buttonDelete:hover {
			background-color: #FF5733;
		}

		.buttonUpdate:hover {
			background-color: #4CAF50;
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
				<button class="button button1" onclick = "setPG('-9')">9th Gen Intel Core</button>
				<button class="button button1" onclick = "setPG('-10')">10th Gen Intel Core</button>
				<button class="button button1" onclick = "setPG('-3')">AMD Ryzen 3000 Series</button>
				<button class="button button1" onclick = "setPG('-4')">AMD Ryzen 4000 Series</button>
				<button class="button button1" onclick = "setPG('-5')">AMD Ryzen 5000 Series</button>
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

<table id="t01">
	<tr>
    <th>sku</th>
		<th>brandName</th>
    <th>core</th>
    <th>tdp</th>
		<th>regularFreq</th>
		<th>boostFreq</th>
		<th>socket</th>
		<th>coreGPU</th>
		<th>thread</th>
		<th>price</th>
		<th>image</th>
		<th style="background-color:orange">Delete</th>
		<th style="background-color:LightSkyBlue">Update</th>
	</tr>



</table>

<button onclick="test('Intel-i3-10800K-id3')">test</button>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction(drpbtn_name) {
	document.getElementById(drpbtn_name).classList.toggle("show");
}
</script>

<script>

function test(a) {
	console.log(origData);

}
var brand_Name = "";
var product_Gen = "";
var product_Level = "";
var cpu_PL = "";
var core_g = "";
function setBrand(brandName){
	brand_Name = brandName;
	console.log(brand_Name);
}

function setPG(productGen) {
	product_Gen = productGen;
	console.log(product_Gen)
}

function setPL(productLevel){
	product_Level = productLevel;
	console.log(product_Level);
}

function setCPL(cpuPowerLevel) {
	cpu_PL = cpuPowerLevel;
	console.log(cpu_PL);
}

function setCG(coreGrahphic) {
	core_g = coreGrahphic;
	console.log(core_g);
}

// This is the header of the table we see, use this to determine the index
var header = ["sku", "brandName", "core", "tdp", "regularFreq", "boostFreq", "socket", "coreGPU", "thread", "price", "image", "Delete", "Update"];
// The index of sku in the header
var indexSku = header.indexOf("sku");
// passVar() will pass the selection as condition to the backend using Ajax
// and update the table
function passVar() {
		console.log("Query clicked, request initiated");
		$.ajax({
	 url: "/DIYComputer/cpu",
	 	data: {
			brand_Name:brand_Name,
		 	product_Gen:product_Gen,
		 	product_Level:product_Level,
	 		cpu_PL:cpu_PL,
		 	core_g:core_g},
		datatype:'json',
	 success: function(data) {
		 	console.log("Result transfer complete");
			console.log(data);
			var parsedData = JSON.parse(data);
			if(parsedData.length == 0) {
				alert("No record found!");
			}
			for (i = 0; i < parsedData.length; i++) {
				var row = document.getElementById("t01").insertRow();

				for (j = 0; j < header.length; j++) {
					row.insertCell(j);
				}
				for (var key in parsedData[i]) {
					//row.insertCell(header.indexOf(key)).innerHTML = parsedData[i][key];
					row.cells[header.indexOf(key)].innerHTML = parsedData[i][key];

				}
				row.cells[header.length-2].style.padding = "0px";
				row.cells[header.length-2].style.margin = "0px";
				//row.cells[header.length-1].style.textAlign = "center";
				row.cells[header.length-2].innerHTML =
				'<button class="buttonDelete" style = "height: 50px;" onclick="recordDelete(this.parentNode.parentNode.cells[indexSku].innerHTML, this.parentNode.parentNode.rowIndex)">Del</button>';

				row.cells[header.length-1].style.padding = "0px";
				row.cells[header.length-1].style.margin = "0px";
				//row.cells[header.length-1].style.textAlign = "center";
				row.cells[header.length-1].innerHTML =
				'<button class="buttonUpdate" style = "height: 50px;" onclick="recordUpdate(this.parentNode.parentNode, this.parentNode.parentNode.rowIndex)">Up</button>';
			}
	 }

	});
}

// reset the conditon and the table back to original
function reset() {
	 brand_Name = "";
	 product_Gen = "";
	 product_Level = "";
	 cpu_PL = "";
	 core_g = "";
	 console.log("condition reset sucessful");
	 tableReset();
	 updateReset();
 }

// reset the table
 function tableReset() {
	 var table = document.getElementById("t01");
	 var len = table.rows.length;

	 for (i = 1; i < len; i++) {
		 table.deleteRow(1);
	 }
	 console.log("table reset sucessful");
 }

// delete the selected record and the record in the table
// sku: the sku of the record we want to delete
// idx: the idx of the record in the table, for deleting the row
 function recordDelete(sku, idx) {
	 deleteConfirm = confirm("Caution! This action can not be recovered!");

	 if (deleteConfirm == true) {
		 document.getElementById("t01").deleteRow(idx);
		 $.ajax({
		 url: "/DIYComputer/cpu/cpu_delete",
		 data: {
			 sku:sku
			 },
		success: function() {
			console.log("delete successful");
			 }
	 });
 } else {
	 console.log("deletion canceled")
 }
 }

// the sku of the cpu we want to update
var skuUpdate = "";
var attUpdate = {};
var origData = {};
function updateReset() {
	skuUpdate = "";
	attUpdate = {};
	origData = {};
	console.log("update necessary data reset successful");
}

 function recordUpdate(recordRow, idx) {
	 skuUpdate = recordRow.cells[indexSku].innerHTML;
	 var table = document.getElementById("t01");
	 	for(i = 0; i < recordRow.cells.length -3; i++) {
			// Restore the original data for backup use
			origData[header[i]] = recordRow.cells[i].innerHTML;
			// create the input textBox
			var t1= document.createElement("input");
			t1.value = table.rows[idx].cells[i].innerHTML;
			t1.size = 10;
			t1.type = "text";
			t1.id = skuUpdate + "-id"+i;
			t1.style = "margin:0px; padding:0px; width:100%";

			// onChange: will store the current colunm name and the value to attUpdate for later trasnfer;
			// onchange event
		  // pass the colnum number of the inputbox to check the column name
			// pass the inputbox value
			// create tuple (att : value) for update

			t1.onchange = function() {
				attUpdate[header[this.parentNode.cellIndex]] = this.value;
				console.log("changed attributes below:");
				console.log(attUpdate);
			};

			//replace the original child by the textbox with the original data as default value;
			table.rows[idx].cells[i].replaceChild(t1, table.rows[idx].cells[i].childNodes[0]);
		}

		// replace the update botton with submit button
		table.rows[idx].cells[header.indexOf("Update")].innerHTML = '<button class="buttonDelete" style = "height: 50px;" onclick="recordUpdateSubmit(this.parentNode.parentNode.rowIndex)">Sub/Canc</button>';
 }

 function recordUpdateSubmit(idx) {
	 	// parm: idx is the row idx we'll use to determine the location of sub/canc button
		// when successful updated the data change the sub/canc button back to Up
		// Replace the table row with uodatated date.
		var updateConfirm = confirm("Caution! This action can not be recovered!");
		var row = document.getElementById("t01").rows[idx];
		if (updateConfirm == true){
			$.ajax({
			url: "/DIYComputer/cpu/cpu_update",
			data: {
				skuUpdate: skuUpdate,
				attUpdate:attUpdate
				},
		 success: function(data) {
			 console.log(data);
			 var parsedData = JSON.parse(data);
			 // overwrite the table row with updated data.
			 for (var key in parsedData[0]) {
				 row.cells[header.indexOf(key)].innerHTML = parsedData[0][key];
			 }
		 	}
		});
		console.log("update successful");
	} else {
		for (i = 0; i < header.length - 3; i++) {
			// overwrite the table row with original data if action canceled
			row.cells[i].innerHTML = origData[header[i]];
		}
		console.log("update canceled")
	}
		// when action perfored regarless of confim or cancel updated the data change the sub/canc button back to Up
		row.cells[header.indexOf("Update")].innerHTML = '<button class="buttonUpdate" style = "height: 50px;" onclick="recordUpdate(this.parentNode.parentNode, this.parentNode.parentNode.rowIndex)">Up</button>';
		updateReset();
 }

</script>



</body>
</html>
