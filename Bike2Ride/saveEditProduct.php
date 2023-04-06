<?php
session_start();
if(!isset($_SESSION['layer'])|| $_SESSION['layer']==false ){// actuel user .. dhhhar
    
    header("location:user.php") ;
    die();
}




if (
    !isset($_POST['Category']) || !isset($_POST['brandName']) 
    ||!isset($_POST['product_id']) ||!isset($_POST['ext'])
    || !isset($_POST['title']) || !isset($_POST['color1'])
    || !isset($_POST['color2']) || !isset($_POST['price'])
    || !isset($_POST['discount']) || !isset($_POST['points'])
    || !isset($_POST['descriptions']) || !isset($_POST['made'])
    || !isset($_POST['code']) || !isset($_POST['gender'])
    || !isset($_POST['material']) || !isset($_POST['model'])
    || !isset($_POST['weightt'])

    || !isset($_POST['categoryName'])
    || !isset($_POST['activity']) || !isset($_POST['chain'])
    || !isset($_POST['sys'])


    || !isset($_POST['size1']) || !isset($_POST['quantity1'])
    || !isset($_POST['size2']) || !isset($_POST['quantity2'])
    || !isset($_POST['size3']) || !isset($_POST['quantity3'])


    || !isset($_FILES['image'])
) {
    header('refresh:2;url=' . $_SERVER['HTTP_REFERER']);
    echo " <center>
    <b style='padding:30px; margin-top:30px; background-color:red; color:white; font-size:30px;' >Vous devez remplir toutes les informations requises</b>
</center>";
    die();


}



require('config.php');

// $ext =  $_POST['ext']; //done

$product_id = mysqli_real_escape_string($con, $_POST['product_id']); //done
$ext = mysqli_real_escape_string($con, $_POST['ext']); 
$Category = mysqli_real_escape_string($con, $_POST['Category']); //done
$brandName = mysqli_real_escape_string($con, $_POST['brandName']); //done
$title = mysqli_real_escape_string($con, $_POST['title']); //done
$color1 = mysqli_real_escape_string($con, $_POST['color1']); //done
$color2 = mysqli_real_escape_string($con, $_POST['color2']); //done
$price = mysqli_real_escape_string($con, $_POST['price']); //done

$discount = mysqli_real_escape_string($con, $_POST['discount']); //done
$points = mysqli_real_escape_string($con, $_POST['points']); //done
$descriptions = mysqli_real_escape_string($con, $_POST['descriptions']); //done
$made = mysqli_real_escape_string($con, $_POST['made']); //done
$code = mysqli_real_escape_string($con, $_POST['code']); //done
$gender = mysqli_real_escape_string($con, $_POST['gender']); //done

$material = mysqli_real_escape_string($con, $_POST['material']); //done
$model = mysqli_real_escape_string($con, $_POST['model']); //done
$weightt = mysqli_real_escape_string($con, $_POST['weightt']); //done

$categoryName = mysqli_real_escape_string($con, $_POST['categoryName']); //done
$activity = mysqli_real_escape_string($con, $_POST['activity']); //done
$chain = mysqli_real_escape_string($con, $_POST['chain']); //done
$sys = mysqli_real_escape_string($con, $_POST['sys']); //done




$size1 = mysqli_real_escape_string($con, $_POST['size1']);
$quantity1 = mysqli_real_escape_string($con, $_POST['quantity1']);

$size2 = mysqli_real_escape_string($con, $_POST['size2']);
$quantity2 = mysqli_real_escape_string($con, $_POST['quantity2']);

$size3 = mysqli_real_escape_string($con, $_POST['size3']);
$quantity3 = mysqli_real_escape_string($con, $_POST['quantity3']);




// ext note done

if (empty($_POST['categoryName']) || empty($_POST['activity'])  || empty($_POST['chain']) || empty($_POST['sys'])){

    $sql = "UPDATE `product` SET 
    `Category` = '$Category',`brandName` = '$brandName',`title` = '$title',`color1` = '$color1',
    `color2` = '$color2',`price` = '$price',`discount` = '$discount',`points` = '$points',
    `descriptions` = '$descriptions',`made` = '$made',`code` = '$code',`gender` = '$gender',
    `material` = '$material',`model` = '$model',`weightt` = '$weightt'
    
    
    
     WHERE `product_id` = '$product_id';";
    
      

    }else{
        $sql = "UPDATE `product` SET 
`Category` = '$Category',`brandName` = '$brandName',`title` = '$title',`color1` = '$color1',
`color2` = '$color2',`price` = '$price',`discount` = '$discount',`points` = '$points',
`descriptions` = '$descriptions',`made` = '$made',`code` = '$code',`gender` = '$gender',
`material` = '$material',`model` = '$model',`weightt` = '$weightt' ,
`categoryName` = '$categoryName' ,`activity` = '$activity' ,`chain` = '$chain' ,`sys` = '$sys' 



 WHERE `product_id` = '$product_id';";

    }










$result = mysqli_query($con, $sql);

if (!$result) {
    header('refresh:2;url=' . $_SERVER['HTTP_REFERER']);
    echo " <center>
   <b style='padding:30px; margin-top:30px; background-color:red; color:white; font-size:30px;'  >Problème d'exécution de requête! </b>
</center>";
    die();
}




// inser the new photo ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;

// $sql = "UPDATE `sizestock` SET 
// `quantity` = '$size1'

//  WHERE `product_id` = '$product_id' and `product_id`='size1';";



//////insert size / quantity

//size1 
$sql = "UPDATE `sizestock` SET 
`quantity` =$quantity1 WHERE `product_id` = $product_id and `widget`='size1';";



 $result = mysqli_query($con, $sql);
 
require('resultNO.php');

//size2
$sql = "UPDATE `sizestock` SET 
`quantity` =$quantity2 WHERE `product_id` = $product_id and `widget`='size2';";



 $result = mysqli_query($con, $sql);

require('resultNO.php');

//size3
$sql = "UPDATE `sizestock` SET 
`quantity` =$quantity3 WHERE `product_id` = $product_id and `widget`='size3';";



 $result = mysqli_query($con, $sql);
 
require('resultNO.php');



//////////////////////update a new photo /////////////////////////



// here hre 


if(!isset($_FILES['image']) ){ 
    $_page=$_SERVER["HTTP_REFERER"] ; // you can just utilise $_page="login.php"
       
    echo" <center>
     <b style='padding:30px; margin-top:30px; background-color:red; color:white; font-size:30px;' > IdTapis / image_file is empty</b>
 </center>" ;
  header('refresh:2 ; url= '.$_page) ;
 die () ;}

$file_name=$_FILES['image']['name'] ;// the actuel name of the uploaded file
$file_size=$_FILES['image']['size'] ;// the size in bytes of the uploaded file
$file_tmp=$_FILES['image']['tmp_name'] ;//the uploaded file in temporary
$file_type=$_FILES['image']['type'] ;// the MIME type of the uploaded file .. echo image/jpnj // ma sta3mneha 
$traget_file="productsImages/".$product_id;//where to store the uploaded imagr { bala , png or jpg } hyda l V. mn 3nde 
// ma sta3mlna l $file_type , ma ela ahameyye
// allow only specific types of imges 
$imageFileType=pathinfo($file_name,PATHINFO_EXTENSION);// the pathe info fc  // echo jpg .. asaseye 
$file_ext=strtolower($imageFileType) ;


$extold=$ext;
$extold=strtolower($extold) ;
$traget_oldfile="productsImages/".$product_id;
$traget_oldfile=$traget_file.".".$extold ;




$file_ext= mysqli_real_escape_string($con,$file_ext);

if(!empty($file_ext)) {

    

$sql=" update product set ext='$file_ext' where product_id='$product_id'";


$result=mysqli_query($con,$sql) ;

   
if(!$result)  {    $_page=$_SERVER["HTTP_REFERER"] ; 
    header('refresh:3 ; url= '.$_page) ;
        echo" <center>
       <b style='padding:30px; margin-top:30px; background-color:red; color:white; font-size:30px;'  >Problème d'exécution de requête! </b>
   </center>" ;
   die () ;
   } 




    


$traget_file=$traget_file.".".$file_ext ; // lezm est3ml iff png if jpg


//check if image file is a aCTUEL IMAGE or fake
if(empty($file_tmp)) {
    $_page=$_SERVER["HTTP_REFERER"] ; // you can just utilise $_page="login.php"
       
    echo" <center>
     <b style='padding:30px; margin-top:30px; background-color:red; color:white; font-size:30px;' > image_file is empty</b>
 </center>" ;
  header('refresh:3 ; url= '.$_page) ;
 die () ;

}
 $check=getimagesize($file_tmp) ; //5mb
 if($check === false) {
   

     $_page=$_SERVER["HTTP_REFERER"] ; // you can just utilise $_page="login.php"
       
     echo" <center>
      <b style='padding:30px; margin-top:30px; background-color:red; color:white; font-size:30px;' >ce fichier n' est pas une image </b>
  </center>" ;
   header('refresh:3 ; url= '.$_page) ;
  die () ;
   


 }


 //chech if file alredy exists 
 if(file_exists($traget_oldfile)){//delete olld photo if anothere extention
    // in case an image with the same name already exists 
    //delet the old image 
    
    unlink($traget_oldfile) ;
     }


 if(file_exists($traget_file)){
// in case an image with the same name already exists 
//delet the olg image 

unlink($traget_file) ;
 }


 move_uploaded_file($file_tmp,$traget_file);
 
 






}



echo "done" ;
// header("location:addBrand.php") ;
header("Location:editProduct.php?succ=1&product_id=$product_id");




// inser the new photo ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;







?>