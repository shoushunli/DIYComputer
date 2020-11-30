<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Select the hardware to add</title>
  <base href="<?php echo site_url();?>">
  <link rel="stylesheet" type="text/css" href="css/adv.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>


<body id="body">
  <div class="navbar">
    <a href="Home/"> <i class="fa fa-home"></i> Home</a>
    <a onclick="mongoRequest()"> <i class="fa fa-database"></i> Collection</a>
  </div>


  <div id="container">
    <div class="dropdown" style="padding-top:20px;">
      <span style="font-size: 16px;">What is your maximum budget ?</span><input id = "budgetInput" onmouseout="budgetRecord(this.value)" type="text" placeholder="$123.00">
    </div>
    <div class="dropdown">
      <a id = "cpuDropbtn" class="dropbtn" onclick="toggle('cpuDrop')">Choose your need on CPU (computing/processing ability): <i class="fa fa-caret-right"></i></a>
      <div id="cpuDrop" class="dropdown-content">
        <a onclick = "setCate('cpu', 'light', 'Light Usage', this)"> Light usage (office use, family entertainment, no or light gaming (LOL, etc)) </a>
        <a onclick = "setCate('cpu', 'medium', 'Medium Usage', this)"> Medium usage (medium gaming (1080 p), light development/video editing) </a>
        <a onclick = "setCate('cpu', 'heavy', 'Heavy Usage', this)"> Heavy usage (2K gaming, heavy development use, data processing, video editing) </a>
        <a onclick = "setCate('cpu', 'extreme', 'Extreme Usage', this)"> Extreme usage (4K gaming, big data processing, machine learning, 4K video editing/rendering) </a>
      </div>
    </div>
    <div class="dropdown">
      <a id = "gpuDropbtn" class="dropbtn" onclick="toggle('gpuDrop')">Choose your need on graphic card (gaming/video processing/rendering ability): <i class="fa fa-caret-right"></i></a>
      <div id="gpuDrop" class="dropdown-content">
        <a onclick = "setCate('gpu', 'mini', 'null', this)"> Do I need this stuff? (office use, family entertainment, no gaming) </a>
        <a onclick = "setCate('gpu', 'light', 'Light Usage ', this)"> Light usage (office use, family entertainment, light gaming (LOL, etc)) </a>
        <a onclick = "setCate('gpu', 'medium', 'Medium Usage', this)"> Medium usage (medium gaming (1080 p/60 Hz), light video editing) </a>
        <a onclick = "setCate('gpu', 'heavy', 'Heavy Usage', this)"> Heavy usage (heavy gaming (2K 60 Hz/1080 p 144 Hz), video editing/rendering) </a>
        <a onclick = "setCate('gpu', 'extreme', 'Extreme Usage', this)"> Extreme usage (4K gaming, 4K video editing/rendering, big data/deep learning etc) </a>
      </div>
    </div>
    <div class="dropdown">
      <a id = "memoryDropbtn" class="dropbtn" onclick="toggle('memoryDrop')">Choose your need on memory (high-load design/modelling/rendering): <i class="fa fa-caret-right"></i></a>
      <div id="memoryDrop" class="dropdown-content">
        <a onclick = "setCate('memory', 'small', 'By Recommending', this)"> Do I need that extra memory stuff? (16GB = 8GB x 2, recommended for general usage)</a>
        <a onclick = "setCate('memory', 'large', 'Extra', this)"> I do have large-memory need (32GB = 16GB x 2)</a>
      </div>
    </div>
    <div class="dropdown">
      <a id = "powerDropbtn" class="dropbtn" onclick="toggle('powerDrop')">Choose your need on Power Supply(high-load design/modelling/rendering): <i class="fa fa-caret-right"></i></a>
      <div id="powerDrop" class="dropdown-content">
        <a onclick = "setCate('power', '0', 'By Recommending', this)"> Use our estimation</a>
        <a onclick = "setCate('power', '450', '450 W', this)"> 450 W</a>
        <a onclick = "setCate('power', '500', '500 W', this)"> 500 W</a>
        <a onclick = "setCate('power', '550', '550 W', this)"> 550 W</a>
        <a onclick = "setCate('power', '600', '600 W', this)"> 600 W</a>
        <a onclick = "setCate('power', '650', '650 W', this)"> 650 W</a>
        <a onclick = "setCate('power', '750', '750 W', this)"> 750 W</a>
      </div>
    </div>
    <div class="dropdown">
      <a id = "pccAndMotherboardDropbtn" class="dropbtn" onclick="toggle('pccAndMotherboardDrop')">Choose your need on PC case and Motherboard(size/form factor of your PC): <i class="fa fa-caret-right"></i></a>
      <div id="pccAndMotherboardDrop" class="dropdown-content">
        <a onclick = "setCate('pccAndMotherboard', 'one', 'By Recommending', this)"> I have no idea, give me all size choices</a>
        <a onclick = "setCate('pccAndMotherboard', 'two', 'Small Size', this)"> I hate huge cases, give me smallest ones</a>
        <a onclick = "setCate('pccAndMotherboard', 'three', 'Large Size', this)"> I might need extra space for better cooling and adding more hardware later </a>
      </div>
    </div>
    <div class="dropdown">
      <a id = "ssdDropbtn" class="dropbtn" onclick="toggle('ssdDrop')">Choose your need on SSD: <i class="fa fa-caret-right"></i></a>
      <div id="ssdDrop" class="dropdown-content">
        <a onclick = "setCate('ssd', 'one', 'By Recommending', this)"> What should I know about this? (office use, family entertainment)</a>
        <a onclick = "setCate('ssd', 'two', 'Fast', this)"> I need absolutely fastest speeds for my applications (heavy disk I/O jobs)</a>
      </div>
    </div>
    <div class="dropdown">
      <a id = "hddDropbtn" class="dropbtn" onclick="toggle('hddDrop')">Choose your need on HDD: <i class="fa fa-caret-right"></i></a>
      <div id="hddDrop" class="dropdown-content">
        <a onclick = "setCate('hdd', 'one', 'By Recommending', this)"> Why do I need this? (office use, family entertainment)</a>
        <a onclick = "setCate('hdd', 'two', '1TB', this)"> I need 1TB extra space storage for my movie/game collections </a>
        <a onclick = "setCate('hdd', 'three', '2TB', this)"> I need 2TB extra space storage for my movie/game collections </a>
      </div>
    </div>



    <div>
      <button class="sub" onclick="result()">Submit</button>
    </div>


  </div>

  <div class="table-popup" id="tab">
    <div>
      <button class="closebtn" onmousemove="showX()" onmouseout="hideX()" onclick="closeTable('tab', 't01')"><i class="fa fa-close" id = "X" style="opacity:0;"></i></button>
    </div>
    <table class="table-container" id="t01">
      <tr>
        <th>CPU</th>
        <th>GPU</th>
        <th>Memory</th>
        <th>Motherboard</th>
        <th>SSD</th>
        <th>HDD</th>
        <th>PCCase</th>
        <th>PowerSupply</th>
        <th style="background:orange">Total Price</th>
        <th style="background:steelblue">Save</th>
      </tr>
    </table>
</div>



<div class="table-popup" id="mongotab">
  <button class="closebtn" onclick="closeTable('mongotab', 't02')"></button>
  <span style="font-size: 20px; color:#4F5155;">My Collection</span>
  <span style="float:right; color:white;">Powered by MongoDB</span>
  <table class="table-container" id = "t02">
    <tr>
      <th>CPU</th>
      <th>GPU</th>
      <th>Memory</th>
      <th>Motherboard</th>
      <th>SSD</th>
      <th>HDD</th>
      <th>PCCase</th>
      <th>PowerSupply</th>
      <th>Total Price</th>
      <th style="background:#ddd;">Delete</th>
    </tr>
  </table>
</div>


  <script src="js/jquery-3.3.1.min.js"></script>

  <script>

    // tog stores which dropdown cotent is currently showing
    var tog = undefined;
    // store budget, value from budgetRecord()
    var budget = 0;

    var saveClicked = false;
    // a dictionay of array stores the values and element of the selected option
    // with the corrresponding category.
    // cates[CPU] = [<a>, Low] @1 the element @2 the value
    var cates = {"cpu":false, "gpu":false,"memory":false, "power":false,"pccAndMotherboard":false, "ssd":false, "hdd":false};

    // regist which price tag hass been open => for easy close
    // closeTable()
    var priceTag = [];
    // the header of the table => for easy insert
    // result() / ajax()
    var header = ["cpu","gpu", "memory", "motherboard", "ssd", "hdd", "pcCase", "power", "price"];
    var price = 0;

    // fetch the result from the backend
    // also calls tableInsert to show the result.
    function result() {
      // store the uninitialized category into $emptyCate
      emptyCate = Object.keys(cates).filter(key => cates[key] === false)

      // check if the budget is initialized
        if(budget == "") {
          // alert if not and add glow
          document.getElementById("budgetInput").classList.add("arrow_box");
          alert("Please enter the budget.");
        }
        // check if any uninitialized category
        if (emptyCate.length != 0) {
          // add glow for each uninitialized category
          emptyCate.forEach((item, i) => {
            document.getElementById(item + "Dropbtn").classList.add("arrow_box");
          });
          alert("Please select all the preferences.");
        }
      // all good
      if((budget != "" && emptyCate.length == 0)) {
        console.log("Request below:");
        console.log(cates);
        $.ajax({
          // url to receive the preferences user selected
          // replace the url below
          url: "http://localhost:8080/DIYComputer/computerServlet",
          //url: "advFuncCon/xxx",
          data: {

              maximum:budget,
              cpu:cates['cpu'][1],
              gpu:cates['gpu'][1],
              memory:cates['memory'][1],
              power:cates['power'][1],
              pccAndMotherboard:cates['pccAndMotherboard'][1],
              ssd:cates['ssd'][1],
              hdd:cates['hdd'][1],
              action:"list"
          },
          datatype: 'json',
          success: function(data) {
            // return all the skus of this category and parse them into $parsedData
            var parsedData = JSON.parse(data);
            // for each parsedData, extract each category inside it
            if(parsedData == null) {
              alert("No config found...")
            } else {
              tableInsert(parsedData, "t01", true);
              // show the result as a table
              openTable('tab');
            }

          }
        });
      }

    }

    //@param tableId: the table shows which table will be reseted.
    function tableReset(tableId) {
      var table = document.getElementById(tableId);
      var len = table.rows.length;
      for (i = 1; i < len; i++) {
          table.deleteRow(1);
      }
      if(table.rows.length == 1) {
        console.log("Table reset successfully");
      } else {
        console.log("Table reset failed");
      }
    }
    //@param parsedData: the parsedData fetched from the backend,
    //@param tableId: the table that the data will be inserted into,
    //@param submit_bool: boolean, if this table if for submit,
    function tableInsert(parsedData, tableId, submit_bool) {
      console.log("Parsed below:");
      console.log(parsedData);
      parsedData.forEach((item, i) => {
        // for each parsedData create a new row
        var row = document.getElementById(tableId).insertRow();
        // for each row (each item of parsedData) create a cell (for each category)
        // and insert the corresonding `sku` in respect to the order of the header
        for (j = 0; j < header.length-1; j++) {
            var cell = row.insertCell(j);
            if(item[header[j]] != null){
              d = document.createElement('div');
              d.classList.add("popup");
              t = document.createElement('span');
              t.classList.add("popuptext");
              d.innerHTML = item[header[j]]['sku'];
              t.innerHTML = "$" + item[header[j]]['price'];
              d.onclick = function() {
                priceTag.push(this.childNodes[1]);
                this.childNodes[1].classList.toggle("show1");
              }
              d.appendChild(t);
              cell.appendChild(d);
            }
        }
        // insert the total price.
        row.insertCell(header.length-1).innerHTML = "$" + item['price'];
        // insert the select button which send index to the backend for MongoDB storing
        b = document.createElement('button');
        if(submit_bool) {
          b.onclick = function() {
            con = confirm("Do you want to save your configuration to imporve our analysis?")
            if(con) {
              $.ajax({
                // url : to receive Index
                url: "http://localhost:8080/DIYComputer/computerServlet",
                data: {
                    index:i,
                    action:"save"
                },
                success: function(data) {
                  console.log("config send to MongoDB sucessfully");
                  alert(i + "-th config saveded !");
                  saveClicked = true;
                }
              });
            }
          }
          b.innerHTML = "save";
          row.insertCell(header.length).appendChild(b);
        } else {

          if(i == parsedData.length-1 && saveClicked) {
            row.classList.add("arrow_row");
            saveClicked = false;
          }

          b.onclick = function() {
            con = confirm("Do you want to delete this configuration? Data can't be retrieved.")
            if(con) {
              document.getElementById(tableId).deleteRow(i+1);
              $.ajax({
                // url : to receive Index
                // replace url below to delete
                url: "",
                data: {
                    index:i,
                    action:"delete"
                },
                success: function(data) {
                  console.log("Config deleted from MongoDB successfully");
                  alert((i+1) + "Config deleted!");
                }
              });
            }
          }

          b.innerHTML = "delete";
          row.insertCell(header.length).appendChild(b);
        }
      });
    }

    //@dropId: the dropdown content id
    // toggle the swich of "show" of the corrresponding dropdown content to the dropId
    function toggle(dropId) {
      if(tog == dropId) {
        hideDropdwn(tog);
        tog = undefined;
      } else if (tog != undefined) {
        hideDropdwn(tog);
        tog = dropId;
        showDropdwn(tog);
      } else {
        tog = dropId;
        showDropdwn(tog);
      }
    }
    // show the X mark
    function showX() {
      document.getElementById("X").style.opacity = 1;
    }
    // hide the X mark
    function hideX() {
      document.getElementById("X").style.opacity = 0;

    }
    // show the table, and blur the background
    // @param conatinerId, the container that holds the table to be opened.
    function openTable(conatinerId) {
      document.getElementById(conatinerId).style.display = "block";
      document.getElementById("container").classList.add("blur");
    }
    // close the table, and normalize the background
    function closeTable(conatinerId, tableId) {
      tableReset(tableId);
      document.getElementById(conatinerId).style.display = "none";
      document.getElementById("container").classList.remove("blur");
      // close the open price tag
      priceTag.forEach((item, i) => {
        item.classList.remove("show1");
      });
      // empty the register of price tag
      priceTag = [];
    }


    // record budget
    // remove the glow if has.
    function budgetRecord(b) {
      budget = b;
      document.getElementById("budgetInput").classList.remove("arrow_box");
      console.log("budget: " + budget + " initialized")
    }

    //show dropdown content
    //@param dropId: the corrresponding Id to identify the dropdown
    function showDropdwn(dropId) {
      document.getElementById(dropId).classList.add("show");
    }
    //hide dropdown content
    //@param dropId: the corrresponding Id to identify the dropdown
    function hideDropdwn(dropId) {
      document.getElementById(dropId).classList.remove("show");
    }
    //register the selected option, and remain selected mark for this option
    //@param cate: the corrresponding category of this option
    //@param value: the value of this option
    //@param test: the text will display on the button as a remainder.
    //@param opt: the corrresponding element of this option

    function setCate(cate, value, text, opt) {
      t = document.createElement('span');
      t.style.color = "steelblue";
      t.innerHTML = " " + text;
      var btn = document.getElementById(cate + "Dropbtn");
      // check if the corrresponding category has already had a selected option
      if(cates[cate] != false) {
        // if so, remove the selection of the older option
        cates[cate][0].style.border = "none";
        btn.replaceChild(t, btn.childNodes[2]);
      } else {
        btn.appendChild(t);
      }
      // select this option by adding green border to its corrresponding element
      opt.style.border = "2px solid #4CAF50";
      // store the corrresponding element and value into the `cates` dictionay
      temp = [opt, value];
      cates[cate] = temp;
      // remove the glow effect if has
      btn.classList.remove("arrow_box");


    }

  function mongoRequest() {
    $.ajax({
      // url to request MongoDB
      // replace the url below
      //url: "http://localhost:8080/DIYComputer/computerServlet",
      url:"advFuncCon/xxx",
        data:{
          action:"showCollection"
        },
      success: function(data) {
        console.log("config send to MongoDB sucessfully");
        var parsedData = JSON.parse(data);
        tableInsert(parsedData, "t02", false);
      }
    });
    openTable('mongotab');
  }
  </script>



</body>
