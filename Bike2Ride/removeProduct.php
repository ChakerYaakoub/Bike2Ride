<?php

session_start();
if(!isset($_SESSION['layer'])|| $_SESSION['layer']==false ){// actuel user .. dhhhar
    
    header("location:user.php") ;
    die();
}


if(  empty( $_GET['product_id'] ) ) {
    header('refresh:2;url='. $_SERVER['HTTP_REFERER']);
    





   echo" <center>
    <b style='padding:30px; margin-top:30px; background-color:red; color:white; font-size:30px;' >ID not found </b>
</center>" ;
die () ;


}
// $succ= 1;
$product_id=$_GET['product_id'];

include "config.php";

$query = "SELECT ext FROM `product` WHERE product_id=$product_id;";
$result = mysqli_query($con, $query);

require('resultNO.php');
$row=mysqli_fetch_array($result) ;

$ext = $row['ext'];



$query = "DELETE FROM product WHERE product_id = $product_id ;";

$result = mysqli_query($con, $query);

require('resultNO.php');

$traget_file="productsImages/".$product_id.".".$ext;
if(!file_exists($traget_file)){
 echo" <center>
 <b style='padding:30px; margin-top:30px; background-color:red; color:white; font-size:30px;'  > loading.. </b>
</center>" ;

}
 else{unlink($traget_file) ;}

echo ("done");
// echo json_encode($succ);



?>

<!-- 
<script> 

$(document).ready(function () {
    $.ajax({
        url: 'AjaxEditProductPHP.php',
        type: 'get',
        dataType: 'JSON',
        success: function (response) {

            let succ =" swal({title: 'DONE!',text: 'The data has been entered successfully',icon: 'success',button: 'continue', });";

       
          $("#removeYes").append(succ);
            

        }
    });
});

</script> -->

<?php

header( "Location:searchEdit.html")
?>