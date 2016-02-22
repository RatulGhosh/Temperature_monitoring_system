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
    
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="list.php">Temperature List</a></li>
      <li class="active"><a href="threshold.php">Threshold</a></li>
      <li><a href="controls.php">Controls</a></li>
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
      <div class="jumbotron">
          <h1>Threshold Temperature</h1>
          <h2 id="threshold">32&deg;C</h2>
          <button type="button" class="btn btn-primary" id="change-threshold" onclick="getValue(this)" value="32">Change Threshold</button>
      </div>
    </div>
    <br>
    <footer id="copy-right" class="col-lg-12">
            COPYRIGHT 2016. All Rights Reserved
    </footer>
    <script>
        function getValue(e){
            var temp=prompt("Enter Threshold Temperature");
            document.getElementById("threshold").innerHTML=temp+"°C";
            document.getElementById("threshold").setAttribute("value",temp);
        }
    </script>    
    <script type="text/javascript">
        $(document).ready(function () {
                $.ajax({
                    type: "POST",
                    url: "index.php",
                    data: "name=" + buttonValue
                }).done(function (data) {
                    $('#command-output').html(data);
                });
            });
        });
    </script>
</body>
</html>
