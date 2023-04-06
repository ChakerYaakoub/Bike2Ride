<?php
session_start();
if(!isset($_SESSION['layer'])|| $_SESSION['layer']==false ){// actuel user .. dhhhar
    
    header("location:user.php") ;
    die();
}




if (
    !isset($_POST['Category']) || !isset($_POST['brandName'])
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

        $sql = "INSERT INTO `product` ( `Category`, `brandName`, `title`, `color1`,
     `color2`, `price`, `discount`, `points`, `descriptions`, `made`, `code`, `gender`,
      `material`, `model`, `weightt`) 
      VALUES
       (  '$Category', '$brandName', '$title', '$color1',
     '$color2', '$price', '$discount', '$points', '$descriptions', '$made', '$code', '$gender',
      '$material', '$model', '$weightt') ";
      

    }else{
        $sql = "INSERT INTO `product` ( `Category`, `brandName`, `title`, `color1`,
     `color2`, `price`, `discount`, `points`, `descriptions`, `made`, `code`, `gender`,
      `material`, `model`, `weightt`, `categoryName`, `activity`, `chain`, `sys`) 
      VALUES
       (  '$Category', '$brandName', '$title', '$color1',
     '$color2', '$price', '$discount', '$points', '$descriptions', '$made', '$code', '$gender',
      '$material', '$model', '$weightt', '$categoryName', '$activity', '$chain', '$sys') ";

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


$sql = " SELECT max(product_id ) AS Newproduct_id , ext 
FROM product;  ";
$result = mysqli_query($con, $sql);

require('resultNO.php');

$row = mysqli_fetch_assoc($result);


$maxId = $row['Newproduct_id'];
$ext = $row['ext'] ; // for photo 



//////insert size / quantity

//size1 
$sql = "  INSERT INTO `sizestock` (`product_id`, `size`, `quantity` , `Category` , `widget`) VALUES ('$maxId', '$size1', '$quantity1' , '$Category' , 'size1');";
$result = mysqli_query($con, $sql);

require('resultNO.php');

//size2
$sql = "  INSERT INTO `sizestock` (`product_id`, `size`, `quantity`  , `Category` , `widget`) VALUES ('$maxId', '$size2', '$quantity2' , '$Category' , 'size2');";
$result = mysqli_query($con, $sql);
require('resultNO.php');

//size3
$sql = "  INSERT INTO `sizestock` (`product_id`, `size`, `quantity`  , `Category` , `widget`) VALUES ('$maxId', '$size3', '$quantity3' , '$Category' , 'size3');";
$result = mysqli_query($con, $sql);
require('resultNO.php');



//////////////////////add a new photo /////////////////////////



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
$traget_file="productsImages/".$maxId;//where to store the uploaded imagr { bala , png or jpg } hyda l V. mn 3nde 
// ma sta3mlna l $file_type , ma ela ahameyye
// allow only specific types of imges 
$imageFileType=pathinfo($file_name,PATHINFO_EXTENSION);// the pathe info fc  // echo jpg .. asaseye 
$file_ext=strtolower($imageFileType) ;


$extold=$ext;
$extold=strtolower($extold) ;
$traget_oldfile="productsImages/".$maxId;
$traget_oldfile=$traget_file.".".$extold ;




$file_ext= mysqli_real_escape_string($con,$file_ext);


$sql=" update product set ext='$file_ext' where product_id='$maxId'";


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
 $check=getimagesize($file_tmp) ;
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
 
 




echo "done" ;
// header("location:addBrand.php") ;
header( "Location:Producttools.php?succ=1")




// inser the new photo ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;







?>