<!DOCTYPE html>
<html lang="en">
<?php

session_start();
if(!isset($_SESSION['layer'])|| $_SESSION['layer']==false ){// actuel user .. dhhhar
    
    header("location:user.php") ;
    die();
}
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>bike</title>
  <link rel="stylesheet" href="css/test.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <style>

  </style>

</head>

<body>

  <p1> Bike<span class="span2">2</span>Ride</p1><br>

  <button><img
      src="photo/bicycle-mtb-wheel-symbol-vector-bike-rubber-mountain-tyre-valve-fitness-cycle-mountainbike-bicycle-mtb-wheel-symbol-vector-135155093.jpg"></button><br>

  <div id="div1" style="width:80px;height:80px;display:none;">
    <p>Add a new mangeriale</p><button class="one"><a style="color:white ;" href="mangeriale.php">Click</a></button>
  </div><br>
  <div id="div2" style="width:80px;height:80px;display:none;">
    <p>Our Managerial</p><button class="one"><a style="color:white ;" href="tableadmin.html">Click</a></button>
  </div><br>

  <script>
    $(document).ready(function () {
      $("button").click(function () {

        $("#div1").fadeIn("slow");
        $("#div2").fadeIn(3000);
        $('div').css('display', 'inline-block')
      });
    });
  </script>
</body>

</html>