<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="<?php echo site_url();?>">
    <title>Insert CPU</title>
</head>
<body>
<div>
    <div>
        <h1>Input your new record<h1/>
    </div>
    <br/>
    <form action="insert/doCpuInsert" method="post">
        <div>Hardware Type: CPU</div><br/>
        <div>Brand</div>
        <select name="brand">
            <option value="intel" selected>Intel</option>
            <option value="amd">AMD</option>
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
    </form><br/>
    <a href="admin/hardwareInsert/">Choose another hardware type</a><br/>
    <a href="admin/index">Back to menu</a>

</div>
</body>
</html>