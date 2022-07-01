<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>console</title>
</head>
<body>


    <form action="traitement.php" method="post">
        <div class="form-floating border border-danger w-50 m-3 p-2">
            Database:
            <select name="database" class="mb-2">
                <option value="mybd" name="mybd">mybd</option>
                <option value="entreprise" name="entreprise">entreprise</option>
            </select> <br>
            requete:
            <textarea class="form-control" name="requete" style="height: 150px"></textarea>
            
            <input type="submit" name="Ok" value="Ok" class="mt-2">
        </div>
    </form>

    <?php
        

        // $options = [
     
        //     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        //     // PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAME utf8',
        //     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        //     PDO::ATTR_EMULATE_PREPARES => false
        //     ];
            
        //     try {
        //         // connection a la base de données selectionnée
        //         if (isset($_POST['database'])) {
        //             define('DB_NAME', $_POST['database']);
        //             $obj_pdo = new PDO('mysql:host=127.0.0.1;dbname='.DB_NAME, 'root', '', $options);
        //         }
                
               
        //     } catch (PDOException $e) {
        //         die('ERROR: '.$e->getMessage());
        //     }

        //     // execution de la requete
        //     if (isset($_POST['Ok']) && !(empty($_POST['requete']))) {
        
        //         $execute = $obj_pdo->query($_POST['requete']);
        //         header('location:employee.php');
                
        //      }else{
        //          echo "Enter a query!";
        //      }
         

    ?>