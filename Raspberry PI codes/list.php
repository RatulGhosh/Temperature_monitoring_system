<!doctype html>
<html>
<head>
  <meta charset="utf-8">

  <title>Thermo</title>
  <meta name="description" content="My Parse App">
  <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</head>

<body>
    <?php
$content=file_get_contents("temperature.txt");
$a=array();
$token = strtok($content,",");
while ($token !== false)
{
array_unshift($a,$token);
$token = strtok(",");
} 
$l=sizeof($a);
    ?>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li class="active"><a href="list.php">Temperature List</a></li>
      <li><a href="threshold.php">Threshold</a></li>
      <li><a href="controls.phpl">Controls</a></li>
      <li><a href="about.html">About Us</a></li>
      <li><a href="contact.html">Contact Us</a></li>
    </ul>
  </div>
</nav>
    <header class="col-lg-12">
        <img src="img/background.jpg">
        <p>Thermo Stability</p>
    </header>
    <br>
    <br>
    <div class="container col-lg-12">
      <div class="heading">
          <h1>Temperature Listing</h1>
      </div>
    </div>
        <div class="col-lg-6" id="temp-list">
    
    <table class="table table-border" id="list"> 
    <tbody>
      <tr>
        <td>5 Minute Ago</td>
        <td><?php echo "$a[55]&deg;C"; ?></td>
      </tr>
      <tr>
        <td>15 Minute Ago</td>
        <td><?php echo "$a[165]&deg;C"; ?></td>
      </tr>
      <tr>
        <td>1 Hour Ago</td>
        <td><?php 
        if($l<660)
            echo "-";
        else
            echo "$a[660]&deg;C"; ?></td>
      </tr>
        <tr>
        <td>2 Hour Ago</td>
        <td><?php if($l<1320)
            echo "-";
        else
            echo "$a[1320]&deg;C"; ?></td></td>
      </tr>
        <tr>
        <td>3 Hour Ago</td>
        <td><?php
        if($l<1980)
            echo "-";
        else
            echo "$a[1980]&deg;C"; ?></td></td>
      </tr>
    </tbody>
  </table>
    </div>
    <br>
    <footer id="copy-right" class="col-lg-12">
            COPYRIGHT 2016. All Rights Reserved
    </footer>
</body>
</html>
