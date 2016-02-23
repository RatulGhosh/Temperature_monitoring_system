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
      <li><a href="threshold.php">Threshold</a></li>
      <li class="active"><a href="controls.php">Controls</a></li>
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
          <h1>Controls</h1>
      </div>
    </div>
    <br>
    <div class="col-lg-12" id="temp-list">
        <table class="table table-border">
    <tbody>
      <tr>
        <td>Fan 1</td>
        <td><button type="button" class="btn btn-success" id="cont-button" value="ON" onclick="toggle(this)">ON</button></td>
      </tr>
      <tr>
        <td>Fan 2</td>
        <td><button type="button" class="btn btn-success" value="ON" id="cont-button" onclick="toggle(this)">ON</button></td>
      </tr>
    </tbody>
  </table>
    </div>
    <footer id="copy-right" class="col-lg-12">
            COPYRIGHT 2016. All Rights Reserved
    </footer>
    <script>
        function toggle(e)
        {
            var val=e.getAttribute("value");
            if(val=="ON"){
                e.innerHTML="OFF";
                e.style.background="#F44336";
                e.setAttribute("value","OFF");
            }
            if(val=="OFF"){
                e.innerHTML="ON";
                e.style.background="#4CAF50";
                e.setAttribute("value","ON");
            }
                
        }
        $(document).ready(function () {
            $('button').click(function () {
                var buttonValue = $(this).attr('value');
                $.ajax({
                    type: "POST",
                    url: "command.php",
                    data: "name=" + buttonValue
                }).done(function (data) {
                    $('#command-output').html(data);
                });
            });
        });
    </script>
    <!--<script type="text/javascript">
        $(document).ready(function () {
            $('button').click(function () {
                var buttonValue = $(this).attr('value');
                $.ajax({
                    type: "POST",
                    url: "command.php",
                    data: "name=" + buttonValue
                }).done(function (data) {
                    $('#command-output').html(data);
                });
            });
        });
    </script>-->

</body>
</html>
