<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Select the hardware to add</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <script src="js/jquery-3.3.1.min.js"></script>
</head>

<body>
<!--头部-->
<div class="header">
    <h1>Welcome to White Papers PT1 Admin Demo</h1>
</div>
<!--顶部菜单-->
<div class="topnav">
    <a href="Home">Home</a>
</div>


<div id = "container">
    <br/>
    <h2 style="color: #003399">Find the maximum number of threads of each brand</h2>
    <p style="font-size: medium; ">
        SELECT brandName, MAX(thread) as max_thread <br/>
        FROM CPU NATURAL JOIN Hardware <br/>
        GROUP BY brandName
    </p>
    <button type="button" onclick="query()">Query</button>
    <br/><br/>
    <table width="1000" border="1" cellspacing="0" align="center">
        <thead>
        <tr>
            <th>brandName</th>
            <th>max_thread</th>
        </tr>
        </thead>
        <tbody id="tbMain"></tbody>
    </table>

</div>

<div id = "container">
    <br/>
    <h2 style="color: #003399">Find the information of CPU whose number of core is 8 <br/>
        union all<br/>
        whose number of thread is 4
    </h2>
    <p style="font-size: medium; ">
        SELECT *<br/>
        FROM CPU NATURAL JOIN Hardware<br/>
        WHERE core = 8<br/>
        UNION ALL<br/>
        SELECT *<br/>
        FROM CPU NATURAL JOIN Hardware<br/>
        WHERE thread = 4
    </p>
    <button type="button" onclick="query2()">Query</button>
    <br/><br/>
    <table width="1000" border="1" cellspacing="0" align="center">
        <thead>
        <tr>
            <th>sku</th>
            <th>core</th>
            <th>thread</th>
            <th>tdp</th>
            <th>regularFreq</th>
            <th>boostFreq</th>
            <th>socket</th>
            <th>brandName</th>
        </tr>
        </thead>
        <tbody id="tbMain2"></tbody>
    </table>

</div>

</body>


<script>
    function query(){

        $.get('ComplexQuery/query', {group : 'brandName'}, function (data){
            var arr = $.parseJSON(data);
            //模拟一段JSON数据，实际要从数据库中读取
                var tbody = document.getElementById('tbMain');
                for(var i = 0;i < arr.length; i++){ //遍历一下json数据
                    var trow = getDataRow(arr[i]); //定义一个方法,返回tr数据
                    tbody.appendChild(trow);
                }

            console.log(arr);
        });
    }

    function query2(){

        $.get('ComplexQuery/query2',function (data){
            var arr = $.parseJSON(data);
            //模拟一段JSON数据，实际要从数据库中读取
            var tbody = document.getElementById('tbMain2');
            for(var i = 0;i < arr.length; i++){ //遍历一下json数据
                var trow = getDataRow2(arr[i]); //定义一个方法,返回tr数据
                tbody.appendChild(trow);
            }

            console.log(arr);
        });
    }

    function getDataRow(h){
        var row = document.createElement('tr'); //创建行

        var idCell = document.createElement('td'); //创建第一列id
        idCell.innerHTML = h.brandName; //填充数据
        row.appendChild(idCell); //加入行  ，下面类似

        var nameCell = document.createElement('td');//创建第二列name
        nameCell.innerHTML = h.max_thread;
        row.appendChild(nameCell);

        return row; //返回tr数据
    }
    function getDataRow2(h){
        var row = document.createElement('tr'); //创建行

        var idCell = document.createElement('td'); //创建第一列id
        idCell.innerHTML = h.sku; //填充数据
        row.appendChild(idCell); //加入行  ，下面类似

        var nameCell = document.createElement('td');//创建第二列name
        nameCell.innerHTML = h.core;
        row.appendChild(nameCell);
        var nameCell = document.createElement('td');//创建第二列name
        nameCell.innerHTML = h.thread;
        row.appendChild(nameCell);
        var nameCell = document.createElement('td');//创建第二列name
        nameCell.innerHTML = h.tdp;
        row.appendChild(nameCell);
        var nameCell = document.createElement('td');//创建第二列name
        nameCell.innerHTML = h.regularFreq;
        row.appendChild(nameCell);
        var nameCell = document.createElement('td');//创建第二列name
        nameCell.innerHTML = h.boostFreq;
        row.appendChild(nameCell);
        var nameCell = document.createElement('td');//创建第二列name
        nameCell.innerHTML = h.socket;
        row.appendChild(nameCell);
        var nameCell = document.createElement('td');//创建第二列name
        nameCell.innerHTML = h.brandName;
        row.appendChild(nameCell);

        return row; //返回tr数据
    }
</script>
</html>
