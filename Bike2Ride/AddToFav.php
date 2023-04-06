
<?php

session_start();
if(!isset($_SESSION['layer'])){
    
    header("location:user.php") ;
    die();
}


// Fetching Values From URL
$userId = $_POST['userId'];
$product_id = $_POST['product_id'];


require('config.php');


$userId = mysqli_real_escape_string($con, $_POST['userId']); //done
$product_id = mysqli_real_escape_string($con, $_POST['product_id']); //done


$sql=" select *  from fav where userId ='$userId' and product_id ='$product_id' " ;
 // for execute the query "sql" from the connection "con"
 $result=mysqli_query($con,$sql) ;

if (mysqli_num_rows($result) == 0) {
    $sql = " INSERT INTO `fav` (`userId`, `product_id`) VALUES ('$userId', '$product_id');";

}
else{

    $sql = "DELETE FROM fav WHERE `fav`.`userId` = $userId AND `fav`.`product_id` = $product_id;";
}






$result = mysqli_query($con, $sql);

require('resultNO.php');



echo "Form Submitted succesfully";


?>