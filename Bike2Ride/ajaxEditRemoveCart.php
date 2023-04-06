
<?php
session_start();
if(!isset($_SESSION['layer'])){
    
    header("location:user.php") ;
    die();
}

// Fetching Values From URL


$userId = $_SESSION['userId'];
$product_id = $_POST['product_id'];
$size = $_POST['size'];
$quantity = $_POST['quantity'];
$what = $_POST['what'];

require('config.php');







$size = mysqli_real_escape_string($con, $_POST['size']); //done




if ($what == 1) {
   

    $sql = "UPDATE `cart` SET `cart_quantity` = '$quantity' WHERE `cart`.`userId` = $userId 
    AND `cart`.`product_id` = $product_id AND `cart`.`product_size` = '$size';";
}else{
    $sql = "DELETE FROM cart WHERE `cart`.`userId` = $userId  AND `cart`.`product_id` = $product_id AND `cart`.`product_size` = '$size';";


}






$result = mysqli_query($con, $sql);

require('resultNO.php');



echo "Form Submitted succesfully";


?>