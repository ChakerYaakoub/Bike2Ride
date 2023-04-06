<?php

session_start();
if(!isset($_SESSION['layer'])|| $_SESSION['layer']==false ){// actuel user .. dhhhar
    
    header("location:user.php") ;
    die();
}
?>


<?php
// session_start();
// if(!isset($_SESSION['admin'])||  $_SESSION['admin']==false ||$_SESSION['admin']==2||$_SESSION['admin']==3){// actuel user .. dhhhar
    
//     header("location:compte.php") ;
//     die();
// }


if( empty( $_POST['brandName'] )||empty($_POST['brand_descriptions'] )||!isset($_FILES['image'] )) {
    header('refresh:2;url='. $_SERVER['HTTP_REFERER']);
   echo" <center>
    <b style='padding:30px; margin-top:30px; background-color:red; color:white; font-size:30px;' >Vous devez remplir toutes les informations requises</b>
</center>" ;
die () ;


}

$brandName=$_POST['brandName'] ;
$brand_descriptions=$_POST['brand_descriptions'] ;  



require('config.php');

$brandName= mysqli_real_escape_string($con,$brandName);
$brand_descriptions= mysqli_real_escape_string($con,$brand_descriptions);


/// if brand exist ..........................................................

$sql=" select *  from brands  " ;

$result=mysqli_query($con,$sql) ;

   if(!$result)  {  
        echo" <center>
       <b style='padding:30px; margin-top:30px; background-color:red; color:white; font-size:30px;'  >Problème d'exécution de requête! </b>
   </center>" ;
   header('refresh:2;url='. $_SERVER['HTTP_REFERER']);

   die () ;
   } 




    
/// end if brand exist ..........................................................


// inser register info new usere ...................................................................
// write a qwery 
$sql=" insert into brands(brandName,brand_descriptions) values('$brandName','$brand_descriptions')" ;


 // for execute the query "sql" from the connection "con"
 $result=mysqli_query($con,$sql) ;

// if retutne errer alor on a a syntax error in the query :

    if(!$result)  {  header('refresh:2;url='. $_SERVER['HTTP_REFERER']);
         echo" <center>
        <b style='padding:30px; margin-top:30px; background-color:red; color:white; font-size:30px;'  >Problème d'exécution de requête! </b>
    </center>" ;
    die () ;
    } 

// end  insert register info new usere ...................................................................



// inser the new photo ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;


$sql=" SELECT max(brand_id ) AS Newbrand_id , ext 
FROM brands;  " ;
 $result=mysqli_query($con,$sql) ;
 
 if(!$result)  {  header('refresh:2;url='. $_SERVER['HTTP_REFERER']);
    echo" <center>
   <b style='padding:30px; margin-top:30px; background-color:red; color:white; font-size:30px;'  >Problème d'exécution de requête! </b>
</center>" ;
die () ;
} 
$row=mysqli_fetch_assoc($result);
$maxId=$row['Newbrand_id'] ;
$ext=$row['ext'] ;










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
$traget_file="BrandsImages/".$maxId;//where to store the uploaded imagr { bala , png or jpg } hyda l V. mn 3nde 
// ma sta3mlna l $file_type , ma ela ahameyye
// allow only specific types of imges 
$imageFileType=pathinfo($file_name,PATHINFO_EXTENSION);// the pathe info fc  // echo jpg .. asaseye 
$file_ext=strtolower($imageFileType) ;


$extold=$ext;
$extold=strtolower($extold) ;
$traget_oldfile="BrandsImages/".$maxId;
$traget_oldfile=$traget_file.".".$extold ;




$file_ext= mysqli_real_escape_string($con,$file_ext);


$sql=" update brands set ext='$file_ext' where brand_id='$maxId'";


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
header( "Location:addBrand.php?succ=1")




// inser the new photo ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;

?>

