<!DOCTYPE html>
<?php

session_start();
if(!isset($_SESSION['layer'])|| $_SESSION['layer']==false ){// actuel user .. dhhhar
    
    header("location:user.php") ;
    die();
}
?>

<?php
$emailErr="";
$email="";
if (isset($_GET['emailErr']) || isset($_GET['email']) ) {
 $emailErr=$_GET['emailErr'];
 $email=$_GET['email'];

    
}



?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mangeriale</title>
    <link rel="stylesheet" href="css/mangeriale.css">


</head>

<body>
    <h1>Mangeriale</h1>

    <div style="text-align:left; padding: 10px;  margin-left: 60px; margin-top: 10px;font-size: 20px;">
        <div class="pp">Add a new : </div>
        <input type="radio" name="layer" value=2 style="margin-left:40px ;" checked form="form1">
        <P3>  Admin</P3>
        <input type="radio" name="layer" value=3 form="form1">
        <p3>  sales man</p3>
        <input type="radio" name="layer" value=4 form="form1">
        <p3>  Delivery man</p3>
    </div>
    
    <div style="text-align:left; padding: 10px; text-align: left; margin-left: 15px;">
      <span class="span5"> Gender</span><br>
      <input type="radio" name="gender" value="male" style="margin-left:40px ; " required form="form1">
      <P3>M.</P3>
      <input type="radio" name="gender" value="female" required form="form1"  checked >
      <p3>Mme.</p3>
  </div>
  <form class="B row" action="registerAdmin.php" method="post" id="form1">

  
      <div>
          <img style="   width:20px;" src="photo/user-name.png">
          <input type="text" placeholder="firstName" name="firstName" required><br>
          <img style="   width:20px;" src="photo/user-name.png">
          <input type="text" placeholder="lastName" name="lastName"  required><br>
          <img style="   width:20px;" src="photo/email.jpg">
          <input type="text" placeholder="E-mail" name="email" value="<?php echo $email;?>" required><br>
          <span style="color:red ;" class="error" > <center> <b> <?php echo $emailErr;?></b> </center> </span> <br>

          <img style="   width:20px;" src="photo/phone.webp">
          <input type="text" placeholder="phone nomber" name="tel" required><br>
      </div>
      <div>
          <img style="   width:20px;" src="photo/location 1.png">
          <input type="text" placeholder="adress" name="addressU" required><br>
          <img style="   width:20px;" src="photo/code p.png">
          <input type="text" placeholder="code postal" name="codePostal" required><br>
          <img style="   width:20px;" src="photo/password.png">
          <input type="password" placeholder="Password" name="passwordU" required><br>
          <!-- <img style="   width:20px;" src="photo/password.png">
          <input type="password" placeholder="Retry-password" required><br> -->
      </div>
      <div id="b" style="margin-top: 113px;">
          <button type="submit">Create account</button>
      </div>
  
  </form>

</body>



</html>