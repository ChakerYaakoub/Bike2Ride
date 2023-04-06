

<?php

if (!$result) {
    header('refresh:2;url=' . $_SERVER['HTTP_REFERER']);
    echo " <center>
   <b style='padding:30px; margin-top:30px; background-color:red; color:white; font-size:30px;'  >Problème d'exécution de requête! </b>
</center>";
    die();
}

?>