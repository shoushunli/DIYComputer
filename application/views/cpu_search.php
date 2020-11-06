
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Select the hardware to add</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" type="text/css" href="css/search.css">

</head>

<body>

  <div class="navbar">
      <a href="Home/">Home</a>

      <div class="dropdown">

          <button class="dropbtn" onclick="myFunction(1)">Brand <i class="fa fa-caret-down"></i>
          </button>

          <div class="dropdown-content" id= 1>
              <button class="button button1" onclick = "setBrand(this, 'Intel')" id = "intelButton" name = "brand">Intel</button>
              <button class="button button1" onclick = "setBrand(this, 'AMD')" id = "amdButton" name = "brand">AMD</button>
          </div>
      </div>

      <div class="dropdown">
          <button class="dropbtn" onclick="myFunction(2)">Product Generation
              <i class="fa fa-caret-down"></i>
          </button>

          <div class="dropdown-content" id= 2>
              <button class="button button1" onclick = "setPG(this, '-9')" id = "9genButton" name = "pg">9th Gen Intel Core</button>
              <button class="button button1" onclick = "setPG(this, '-10')" id = "10genButton" name = "pg">10th Gen Intel Core</button>
              <button class="button button1" onclick = "setPG(this,'-3')" id = "r3sButton" name = "pg">AMD Ryzen 3000 Series</button>
              <button class="button button1" onclick = "setPG(this,'-4')" id = "r4sButton" name = "pg">AMD Ryzen 4000 Series</button>
              <button class="button button1" onclick = "setPG(this,'-5')"id = "r5sButton" name = "pg">AMD Ryzen 5000 Series</button>
          </div>

      </div>

      <div class="dropdown">
          <button class="dropbtn" onclick="myFunction(3)">Product Level
              <i class="fa fa-caret-down"></i>
          </button>

          <div class="dropdown-content" id= 3>
              <button class="button button1" onclick = "setPL(this,'i3')" id = "i3Button" name = "pl">i3</button>
              <button class="button button1" onclick = "setPL(this,'i5')" id = "i5Button" name = "pl">i5</button>
              <button class="button button1" onclick = "setPL(this,'i7')" id = "i7Button" name = "pl">i7</button>
              <button class="button button1" onclick = "setPL(this,'i9')" id = "i9Button" name = "pl">i9</button>
              <button class="button button1" onclick = "setPL(this,'R3')" id = "r3Button" name = "pl">R3</button>
              <button class="button button1" onclick = "setPL(this,'R5')" id = "r5Button" name = "pl">R5</button>
              <button class="button button1" onclick = "setPL(this,'R7')" id = "r7Button" name = "pl">R7</button>
              <button class="button button1" onclick = "setPL(this,'R9')" id = "r9Button" name = "pl">R9</button>
          </div>
      </div>

      <div class="dropdown">
          <button class="dropbtn" onclick="myFunction(4)">CPU Power Level
              <i class="fa fa-caret-down"></i>
          </button>

          <div class="dropdown-content" id= 4>
              <button class="button button1" onclick = "setCPL(this,'Overclock')" id = "ocButton" name = "cpl">Overclock</button>
              <button class="button button1" onclick = "setCPL(this,'Regular')" id = "rgButton"  name = "cpl">Regular</button>
              <button class="button button1" onclick = "setCPL(this,'Low Power')" id = "lwButton" name = "cpl">Low Power</button>
          </div>
      </div>

      <div class="dropdown">
          <button class="dropbtn" onclick="myFunction(5)">Core Graphics
              <i class="fa fa-caret-down"></i>
          </button>

          <div class="dropdown-content" id= 5>
              <button class="button button1" onclick = "setCG(this,true)" id = "cgTButton" name = "cg">True</button>
              <button class="button button1" onclick = "setCG(this,false)"id = "cgFButton" name = "cg">FALSE</button>
          </div>
      </div>

  </div>

  <div id="container">
      <button class="button button2" onclick="passVar()" style="margin:4px; ">Query</button>
      <button class="button button3" onclick="reset()" style="margin:4px; ">Reset</button>
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
          <th style="background-color: #666; color:#f3f3f3">Delete</th>
          <th style="background-color: #666; color:#f3f3f3">Delete</th>
      </tr>
  </table>

  <!--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script>
      /* When the user clicks on the button,
      toggle between hiding and showing the dropdown content */
      function myFunction(drpbtn_name) {
          document.getElementById(drpbtn_name).classList.toggle("show");
      }
  </script>

  <script>
      var names = {};
      var brand_Name = "";
      var product_Gen = "";
      var product_Level = "";
      var cpu_PL = "";
      var core_g = "";
      function setBrand(ele, brandName){
          if(names[ele.name] != undefined) {
            document.getElementById(names[ele.name]).style.border = "none";
          }
          names[ele.name] = ele.id;
          document.getElementById(ele.id).style.border = "2px solid #4CAF50";
          brand_Name = brandName;
          console.log(brand_Name);
      }

      function setPG(ele, productGen) {
        if(names[ele.name] != undefined) {
          document.getElementById(names[ele.name]).style.border = "none";
        }
        document.getElementById(ele.id).style.border = "2px solid #4CAF50";
        names[ele.name] = ele.id;
          product_Gen = productGen;
          console.log(product_Gen)
      }

      function setPL(ele, productLevel){
        if(names[ele.name] != undefined) {
          document.getElementById(names[ele.name]).style.border = "none";
        }
        document.getElementById(ele.id).style.border = "2px solid #4CAF50";
        names[ele.name] = ele.id;
          product_Level = productLevel;
          console.log(product_Level);
      }

      function setCPL(ele, cpuPowerLevel) {
        if(names[ele.name] != undefined) {
          document.getElementById(names[ele.name]).style.border = "none";
        }
        document.getElementById(ele.id).style.border = "2px solid #4CAF50";
        names[ele.name] = ele.id;
          cpu_PL = cpuPowerLevel;
          console.log(cpu_PL);
      }

      function setCG(ele, coreGrahphic) {
        if(names[ele.name] != undefined) {
          document.getElementById(names[ele.name]).style.border = "none";
        }
        document.getElementById(ele.id).style.border = "2px solid #4CAF50";
        names[ele.name] = ele.id;
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
              url: "cpu/cpuSearch",
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
                          '<button class="buttonDelete" style = "height: 50px;" onclick="recordDelete(this.parentNode.parentNode.cells[indexSku].innerHTML, this.parentNode.parentNode.rowIndex)">delete</button>';

                      row.cells[header.length-1].style.padding = "0px";
                      row.cells[header.length-1].style.margin = "0px";
                      //row.cells[header.length-1].style.textAlign = "center";
                      row.cells[header.length-1].innerHTML =
                          '<button class="buttonUpdate" style = "height: 50px;" onclick="recordUpdate(this.parentNode.parentNode, this.parentNode.parentNode.rowIndex)">update</button>';
                  }
              }

          });
          reset();
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
          selectReset();
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

      function selectReset() {
        for (var key in names) {
          document.getElementById(names[key]).style.border ="none";
        }
        names = {};
      }

      // delete the selected record and the record in the table
      // sku: the sku of the record we want to delete
      // idx: the idx of the record in the table, for deleting the row
      function recordDelete(sku, idx) {
          deleteConfirm = confirm("Caution! This action can not be recovered!");

          if (deleteConfirm == true) {
              document.getElementById("t01").deleteRow(idx);
              $.ajax({
                  url: "cpu/cpu_delete",
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
          for(i = 1; i < recordRow.cells.length -3; i++) {
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
              if(table.rows[idx].cells[i].hasChildNodes()) {
                    t1.value = table.rows[idx].cells[i].innerHTML;
                    table.rows[idx].cells[i].replaceChild(t1, table.rows[idx].cells[i].childNodes[0]);
              } else {
                    table.rows[idx].cells[i].appendChild(t1);
              };
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
            console.log(skuUpdate);
              $.ajax({
                  url: "cpu/cpu_update",
                  data: {
                      skuUpdate: skuUpdate,
                      attUpdate:attUpdate
                  },
                  success: function(data) {
                      console.log("update successful");
                      console.log(data);
                      var parsedData = JSON.parse(data);
                      // overwrite the table row with updated data.
                      for (var key in parsedData[0]) {
                          row.cells[header.indexOf(key)].innerHTML = parsedData[0][key];
                      }
                  }
              });

          } else {
              for (i = 0; i < header.length - 3; i++) {
                  // overwrite the table row with original data if action canceled
                  row.cells[i].innerHTML = origData[header[i]];
              }
              console.log("update canceled")
          }
          // when action perfored regarless of confim or cancel updated the data change the sub/canc button back to Up
          row.cells[header.indexOf("Update")].innerHTML = '<button class="buttonUpdate" style = "height: 50px;" onclick="recordUpdate(this.parentNode.parentNode, this.parentNode.parentNode.rowIndex)">update</button>';
      }

  </script>



</body>
