<?php
        
        require_once "connexion.php";

            // execution de la requete
            if (isset($_POST['Ok']) && !(empty($_POST['requete']))) {
        
                $execute = $obj_pdo->query($_POST['requete']);
                header('location:employee.php');
                
             }else{
                 echo "Enter a query!";
             }
         

    ?>