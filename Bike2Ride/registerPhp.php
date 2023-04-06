<?php

session_start();
if(isset($_SESSION['layer'])){
    
    header("location:user3.php") ;
    die();
}

if(  empty( $_POST['gender']) || empty( $_POST['firstName'] )|| empty( $_POST['lastName']) || empty( $_POST['email'])|| empty( $_POST['tel'])
 || empty( $_POST['addressU']) || empty( $_POST['codePostal'])|| empty( $_POST['passwordU']) ) {
    
    header('refresh:2;url='. $_SERVER['HTTP_REFERER']);
    





   echo" <center>
    <b style='padding:30px; margin-top:30px; background-color:red; color:white; font-size:30px;' >Vous devez remplir toutes les informations requises</b>
</center>" ;
die () ;


}
$gender=$_POST['gender'] ;
$firstName=$_POST['firstName'] ;
$lastName=$_POST['lastName'] ;
$email=$_POST['email'] ;
$tel=$_POST['tel'] ;
$addressU=$_POST['addressU'] ;
$codePostal=$_POST['codePostal'] ;
$passwordU=$_POST['passwordU'] ;



require('config.php');

$gender= mysqli_real_escape_string($con,$gender);
$firstName= mysqli_real_escape_string($con,$firstName);
$lastName= mysqli_real_escape_string($con,$lastName);
$email= mysqli_real_escape_string($con,$email);
$tel= mysqli_real_escape_string($con,$tel);
$addressU= mysqli_real_escape_string($con,$addressU);
$codePostal= mysqli_real_escape_string($con,$codePostal);
$passwordU= mysqli_real_escape_string($con,$passwordU);

//  eza ken fe meme email .................................................................

$sql=" select *  from users  " ;

$result=mysqli_query($con,$sql) ;

   if(!$result)  {  
        echo" <center>
       <b style='padding:30px; margin-top:30px; background-color:red; color:white; font-size:30px;'  >Problème d'exécution de requête! </b>
   </center>" ;
   header('refresh:2;url='. $_SERVER['HTTP_REFERER']);

   die () ;
   } 

   for($i=0;$i<mysqli_num_rows($result); $i++)
  {
    
    $row=mysqli_fetch_assoc($result);
    if($email==$row['email']){
        $emailErr="This email already has an account " ;
       
        



  header( "Location:signUp.php?emailErr=".$emailErr."&email=".$email);
  die () ;
  } 

    } 
// end  eza ken fe meme email .................................................................


// inser register info new usere ...................................................................
// write a qwery 

if(isset( $_POST['layer'])) {
    $regLayer=$_POST['layer'] ;
    
 $sql=" insert into users(gender,firstName,lastName,email,tel,addressU,codePostal,passwordU,layer) values('$gender','$firstName','$lastName','$email','$tel','$addressU','$codePostal','$passwordU','$regLayer')" ;

}
else{
    $sql=" insert into users(gender,firstName,lastName,email,tel,addressU,codePostal,passwordU) values('$gender','$firstName','$lastName','$email','$tel','$addressU','$codePostal','$passwordU')" ;

}



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


// start new session and new cookies ///////.................................................



    // write a qwery 
    $sql=" select *  from users where email='$email' " ;


    // for execute the query "sql" from the connection "con"
    $result=mysqli_query($con,$sql) ;
    
    // if retutne errer alor on a a syntax error in the query :
    
       if(!$result)  {  header('refresh:2;url='. $_SERVER['HTTP_REFERER']);
            echo" <center>
           <b style='padding:30px; margin-top:30px; background-color:red; color:white; font-size:30px;'  >Problème d'exécution de requête! </b>
       </center>" ;
       die () ;
       } 
    
       if(mysqli_num_rows($result)==0) {
    
        header('refresh:2;url='. $_SERVER['HTTP_REFERER']);
           echo"<center><p style='padding:30px; margin-top:30px; background-color:red; color:white; font-size:30px;' >  email for cookies not found </p></center>" ;
           die () ;
    
       } 
    
       else{ // in case we found a record , we will redirect the user to the page off user.php
    
           $row=mysqli_fetch_array($result) ;
         
    
    
           setcookie('email',$row['email'],time()+10000) ; // variabl for cookies 
       
           $_SESSION['userId']=$row['userId'] ;
           
           // set variable for session 
           if($row['layer']==1) {
            $_SESSION['layer']=1 ;
            header('location:Dashboard.php') ; } // super admin
        
        elseif($row['layer']==2) {
         $_SESSION['layer']=2 ;
         header('location:Dashboard.php') ; } //  admin

         elseif($row['layer']==3) {
             $_SESSION['layer']=3 ; 
             header('location:Dashboard.php') ;}  // sales man 

             elseif($row['layer']==4) {
                 $_SESSION['layer']=4 ; 
                 header('location:Dashboard.php') ;}  // dilevery 


        else{
              $_SESSION['layer']=false;
              header('location:user3.php') ;} // actuel user
    
    
      
       }
       
    
    
    


?>