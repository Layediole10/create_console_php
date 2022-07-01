<?php

$options = [
     
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    // PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAME utf8',
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
    ];
    // define('DB_NAME', $_POST['database']);
    try {
        $obj_pdo = new PDO('mysql:host=127.0.0.1;dbname=entreprise', 'root', '', $options);
        // echo 'connecting...!';
    } catch (PDOException $e) {
        die('ERROR: '.$e->getMessage());
    }

?>