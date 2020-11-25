<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Select the hardware to add</title>
  <base href="<?php echo site_url();?>">
  <link rel="stylesheet" type="text/css" href="css/basic.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
  <div class="navbar">


    <a href="Home/"> <i class="fa fa-home"></i> Home</a>


    <div class="dropdown">
      <button onclick="myFunction('CPU', 'cpuDrop')" class="dropbtn">CPU <i class="fa fa-caret-down"></i></button>
      <div id="cpuDrop" class="dropdown-content">
        <input type="text" placeholder="Search.." id="cpuInput" onkeyup="filterFunction('cpuInput', 'cpuDrop')">

      </div>
    </div>

    <div class="dropdown">
      <button onclick="myFunction('Motherboard', 'mbDrop')" class="dropbtn">Motherboard <i class="fa fa-caret-down"></i></button>
      <div id="mbDrop" class="dropdown-content">
        <input type="text" placeholder="Search.." id="mbInput" onkeyup="filterFunction('mbInput', 'mbDrop')">

      </div>
    </div>

    <div class="dropdown">
      <button onclick="myFunction('Memory', 'mmDrop')" class="dropbtn">Memory <i class="fa fa-caret-down"></i></button>
      <div id="mmDrop" class="dropdown-content">
        <input type="text" placeholder="Search.." id="mmInput" onkeyup="filterFunction('mmInput','mmDrop')">

      </div>
    </div>

    <div class="dropdown">
      <button onclick="myFunction('GPU', 'gpuDrop')" class="dropbtn">GPU <i class="fa fa-caret-down"></i></button>
      <div id="gpuDrop" class="dropdown-content">
        <input type="text" placeholder="Search.." id="gpuInput" onkeyup="filterFunction('gpuInput','gpuDrop')">

      </div>
    </div>

    <div class="dropdown">
      <button onclick="myFunction('SSD', 'ssdDrop')" class="dropbtn">SSD <i class="fa fa-caret-down"></i></button>
      <div id="ssdDrop" class="dropdown-content">
        <input type="text" placeholder="Search.." id="ssdInput" onkeyup="filterFunction('ssdInput', 'ssdDrop')">

      </div>
    </div>

    <div class="dropdown">
      <button onclick="myFunction('HDD', 'hddDrop')" class="dropbtn">HDD <i class="fa fa-caret-down"></i></button>
      <div id="hddDrop" class="dropdown-content">
        <input type="text" placeholder="Search.." id="hddInput" onkeyup="filterFunction('hddInput', 'hddDrop')">

      </div>
    </div>

    <div class="dropdown">
      <button onclick="myFunction('Case', 'caseDrop')" class="dropbtn">Case <i class="fa fa-caret-down"></i></button>
      <div id="caseDrop" class="dropdown-content">
        <input type="text" placeholder="Search.." id="caseInput" onkeyup="filterFunction('caseInput', 'caseDrop')">

      </div>
    </div>

    <div class="dropdown">
      <button onclick="myFunction('Power Supply', 'powDrop')" class="dropbtn">Power Supply <i class="fa fa-caret-down"></i></button>
      <div id="powDrop" class="dropdown-content">
        <input type="text" placeholder="Search.." id="powInput" onkeyup="filterFunction('powInput', 'powDrop')">

      </div>
    </div>

  </div>


  <table id="t01">
    <tr>
      <th>CPU</th>
      <th>Motherboard</th>
      <th>Memory</th>
      <th>GPU</th>
      <th>SSD</th>
      <th>HDD</th>
      <th>Case</th>
      <th>Power Supply</th>
      <th style="background:orange">Total Price</th>
    </tr>
    <tr>
      <td>0.0</td>
      <td>0.0</td>
      <td>0.0</td>
      <td>0.0</td>
      <td>0.0</td>
      <td>0.0</td>
      <td>0.0</td>
      <td>0.0</td>
      <td>0.0</td>
    </tr>
  </table>




  <script src="js/jquery-3.3.1.min.js"></script>

  <script>
    var header = {"CPU":false, "Motherboard":false, "Memory":false, "GPU":false,
     "SSD":false, "HDD":false, "Case":false, "Power Supply":false, "price":false};
    var price = 0;
    //@param cate: the category this button belongs to
    //@param dropId: the Id of the dropdown-connent
    // TODO:
    //Search skus based on the category and insert the skus into dropdown memu for search
    function myFunction(cate, dropId) {
      // Insert the SKU of this categroy from the database into the dropdown
      // pass the category to the database
      if(!header[cate]) {
      $.ajax({
        url: "basicFuncCon/skuSearch",
        data: {
          cate: cate
        },
        datatype: 'json',
        success: function(data) {
          // return all the skus of this category and parse them into $parsedData
          var parsedData = JSON.parse(data);
          if (parsedData.length > 0) {
            console.log("SKU initialization successful");
            // Insert each sku into the dropdown content.
            parsedData.forEach((item, i) => {
              div = document.getElementById(dropId);
              // for each sku we get from db we create a new empty link
              t = document.createElement("a");
              // the text the link shows is the sku
              t.innerHTML = item.sku;
              // Once click on the link
              t.onclick = function() {
                // update the corresonding header with sku in yellow
                thead = document.getElementsByTagName('th');
                cell = thead[Object.keys(header).indexOf(cate)];
                cell.innerHTML = cate + " : ";
                var skuSpan = document.createElement("span");
                skuSpan.textContent = item.sku;
                skuSpan.style = "color:yellow";
                cell.appendChild(skuSpan);
                console.log("Tag added sucessfully")
                // search for the price of corresonding sku from db and update the price cell
                priceSearch(cate, item.sku);
              };
              // we append the link into the dropdown-content
              div.appendChild(t);
            });
            // alert if the request of skus failed.
          } else {
            alert("SKU initialization Failed")
          }
        }
      });
        header[cate] = true;
    }

      // show the dropdown content
      document.getElementById(dropId).classList.toggle("show");
    }

    // For further implementation usage.
    function inputReset(inputId) {
      input = document.getElementById(inputId);
      console.log(inputId);
    }
    //@param cate: the category the sku belongs to
    //@param sku: the sku we want to search for price
    function priceSearch(cate, sku) {
      $.ajax({
        url: "basicFuncCon/priceSearch",
        data: {
          sku: sku
        },
        success: function(data) {
          // returns the price of the product with the sku privided.
          console.log("price retrieved successfully")
          tData = document.getElementsByTagName('td');
          tData[Object.keys(header).indexOf(cate)].innerHTML = data;
          price = 0;
          for (var i = 0; i < Object.keys(header).length - 1; i++) {
            price += parseFloat(tData[i].innerHTML);
          }
          tData[Object.keys(header).indexOf("price")].innerHTML = price;
        }
      });
    }




    function filterFunction(input, drop) {
      var input, filter, a, i;
      input = document.getElementById(input);
      filter = input.value.toUpperCase();
      div = document.getElementById(drop);
      a = div.getElementsByTagName("a");
      for (i = 0; i < a.length; i++) {
        txtValue = a[i].textContent || a[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          a[i].style.display = "";
        } else {
          a[i].style.display = "none";
        }
      }
    }
  </script>


</body>
