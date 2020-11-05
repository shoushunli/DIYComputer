<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Select the hardware to add</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
</head>
<body>
<!--头部-->
<div class="header">
    <h1>Welcome to White Papers PT1 Admin Demo</h1>
</div>
<!--顶部菜单-->
<div class="topnav">
    <ul>
        <li><a href="admin/menu">Hardware Information</a></li>
        <li><a class="active" href="admin/cpuInsert">Adding new record</a></li>
        <li><a href="#contact">My List</a></li>
        <li><a href="#about">Advanced Function</a></li>
    </ul>
</div>
<!--分列-->
<div class="row">
    <!--    侧边菜单-->
    <div class="column side leftnav">
        <ul>
            <li><a class="active" href="insert/cpuInsert">CPU</a></li>
            <li><a href="#news">Motherboard</a></li>
            <li><a href="#contact">Memory</a></li>
            <li><a href="#about">GPU</a></li>
            <li><a href="#about">SSD</a></li>
            <li><a href="#about">HDD</a></li>
            <li><a href="#about">Case</a></li>
            <li><a href="#about">Power Supply</a></li>
        </ul>
    </div>
    <!--中间内容-->
    <div class="column middle">
        <br/>
        <form action="insert/doCpuInsert" method="post">
            <div>Brand</div>
            <select name="brand">
                <option value="Intel" selected>Intel</option>
                <option value="AMD">AMD</option>
            </select>
            <div>SKU</div>
            <input type="text" name="sku">
            <div>Price</div>
            <input type="number" name="price">
            <div>Number of Cores</div>
            <input type="number" name="cores">
            <div>Number of Threads</div>
            <input type="number" name="threads">
            <div>TDP</div>
            <input type="number" name="tdp">
            <div>Regular Frequency</div>
            <input type="number" name="regularFreq">
            <div>Boost Frequency</div>
            <input type="number" name="boostFreq">
            <div>Core GPU</div>
            <input type="text" name="coreGPU">
            <div>Socket</div>
            <input type="text" name="socket"><br/><br/>
            <input type="submit" value="Submit"><br/>
        </form>

    </div>

</div>

<script>
    if(<?php echo $rows;?> == 2){
        alert("添加成功！");
    }
    else{
        alert("添加失败！");
    }
</script>

</body>
</html>