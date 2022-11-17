<?php
    // $host = "localhost";
    // $dbname = "webtech_project";
    // $user = "root";
    // try {
    //     $con = new PDO("mysql:host=$host;dbname=$dbname", $user, '');
    // } catch (PDOException $e) {
    //     echo $e->getMessage();
    // }

    try {
        $con = new PDO("sqlite:".__DIR__."../../../webtech_project.db");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    
?>
