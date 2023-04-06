<?php

session_start();
if(isset($_SESSION['layer'])){ // some one logine 
    
    header("location:user3.php") ;
    die();
}

if(  empty( $_POST['email']) || empty( $_POST['password'] )) {
    header("location:user3.php") ;
    





   echo" <center>
    <b style='padding:30px; margin-top:30px; background-color:red; color:white; font-size:30px;' >Vous devez remplir toutes les informations requises</b>
</center>" ;
die () ;


}
$email=$_POST['email'] ;
$password=$_POST['password'] ;


require('config.php');

$email= mysqli_real_escape_string($con,$email);
$password= mysqli_real_escape_string($con,$password);

// Nvarchar(100) {عربي *& $@@##R@ }



$sql=" select *  from users where email='$email' and passwordU='$password' " ;


 // for execute the query "sql" from the connection "con"
 $result=mysqli_query($con,$sql) ;

// if retutne errer alor on a a syntax error in the query :

    if(!$result)  {    header('refresh:2;url='. $_SERVER['HTTP_REFERER']);
         echo" <center>
        <b style='padding:30px; margin-top:30px; background-color:red; color:white; font-size:30px;'  >Problème d'exécution de requête! </b>
    </center>" ;
    die () ;
    } 

    if(mysqli_num_rows($result)==0) {
        $passErr="Email or Password is Wrong" ;
        
  header( "Location:user.php?passErr=".$passErr);
  die () ;

      

    } 
    

    else{ // in case we found a record , we will redirect the user to the page off user3.php

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
