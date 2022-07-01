<?php
     require_once "connexion.php";

     if (isset($_POST['Ok']) && !(empty($_POST['requete']))) {

       $requete = "INSERT INTO historiques (id_histo, histo_reqte) VALUES (null, '$_POST[requete]')";
        $execute = $obj_pdo->query($requete);
        
        
     }

?>