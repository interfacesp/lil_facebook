<?php
    try {
        $mysqlClient = new PDO(
            sprintf('mysql:host=%s;dbname=%s;port=%s', 
            "localhost",
            "instagram",
            3306),
            "root",
            "root"
        );
        $mysqlClient->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch(Exception $exception) {
        die('Oops, il y a eu problème : '.$exception->getMessage());
    }
?>