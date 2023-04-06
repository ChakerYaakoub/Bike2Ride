
<?php
session_start();
if(!isset($_SESSION['layer'])){
    
    header("location:user.php") ;
    die();
}

// Fetching Values From URL
$userId = $_POST['userId'];
$product_id = $_POST['product_id'];
$size = $_POST['size'];
$quantity = $_POST['quantity'];

require('config.php');


$userId = mysqli_real_escape_string($con, $_POST['userId']); //done
$product_id = mysqli_real_escape_string($con, $_POST['product_id']); //done
$size = mysqli_real_escape_string($con, $_POST['size']); //done
$quantity = mysqli_real_escape_string($con, $_POST['quantity']); //done

$sql=" select *  from cart where userId='$userId' and product_id='$product_id' and product_size='$size' " ;
 // for execute the query "sql" from the connection "con"
 $result=mysqli_query($con,$sql) ;

if (mysqli_num_rows($result) == 0) {
    $sql = " INSERT INTO `cart` (`userId`, `product_id`, `product_size`, `cart_quantity`) VALUES ('$userId', '$product_id',
 '$size', '$quantity');";

}else{

    $sql = "UPDATE `cart` SET `cart_quantity` = '$quantity' WHERE `cart`.`userId` = $userId 
    AND `cart`.`product_id` = $product_id AND `cart`.`product_size` = '$size';";
}






$result = mysqli_query($con, $sql);

require('resultNO.php');



echo "Form Submitted succesfully";


?>