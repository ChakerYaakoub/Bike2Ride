<?php

require('config.php');


$sql=" select *  from bikecategory  " ;


$result=mysqli_query($con,$sql) ;

   if(!$result)  {  
        echo" <center>
       <b style='padding:30px; margin-top:30px; background-color:red; color:white; font-size:30px;'  >Problème d'exécution de requête! </b>
   </center>" ;
   header('refresh:2;url='. $_SERVER['HTTP_REFERER']);

   die () ;
   } 


  
   
   for($i=0;$i<mysqli_num_rows($result); $i++)
   { $row=mysqli_fetch_assoc($result);
    
    echo " <option value=".$row['categoryName'].">".$row['categoryName']."</option>" ;

   }





?>