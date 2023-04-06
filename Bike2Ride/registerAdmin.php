<?php

session_start();


if(  empty( $_POST['gender']) || empty( $_POST['firstName'] )|| empty( $_POST['lastName']) || empty( $_POST['email'])|| empty( $_POST['tel'])
 || empty( $_POST['addressU']) || empty( $_POST['codePostal'])|| empty( $_POST['passwordU']) || empty( $_POST['layer']) ) {
    
    header('refresh:2;url='. $_SERVER['HTTP_REFERER']);
    





   echo "enter all info " ;
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
$reglayer=$_POST['layer'] ;// 2 admin , 3 seles man , 4 delivery // most be numbre  



require('config.php');// 

$gender= mysqli_real_escape_string($con,$gender);// for string erreur '' # *  it' s
$firstName= mysqli_real_escape_string($con,$firstName); // for string erreur 
$lastName= mysqli_real_escape_string($con,$lastName);// for string erreur 
$email= mysqli_real_escape_string($con,$email);// for string erreur 
$tel= mysqli_real_escape_string($con,$tel);// for string erreur 
$addressU= mysqli_real_escape_string($con,$addressU);// for string erreur 
$codePostal= mysqli_real_escape_string($con,$codePostal);// for string erreur 
$passwordU= mysqli_real_escape_string($con,$passwordU);// for string erreur 




// insert register info new admin ...


    
 $sql=" insert into users(gender,firstName,lastName,email,tel,addressU,codePostal,passwordU,layer) values('$gender','$firstName','$lastName','$email','$tel','$addressU','$codePostal','$passwordU','$reglayer')" ;






 // for execute the query "sql" from the connection "con"
 $result=mysqli_query($con,$sql) ;

// if retutne errer alor on a a syntax error in the query :

    if(!$result)  {  header('refresh:2;url='. $_SERVER['HTTP_REFERER']);
         echo" <center>
        <b style='padding:30px; margin-top:30px; background-color:red; color:white; font-size:30px;'  >problem in execute requet</b>
    </center>" ;
    die () ;
    } 

// end  insert register info new usere ...................................................................


// start new session and new cookies ///////.................................................

?>

<script>
alert("done") ;
</script>

<?php


      header('refresh:1;url='. $_SERVER['HTTP_REFERER']);
       
    
    
    


?>