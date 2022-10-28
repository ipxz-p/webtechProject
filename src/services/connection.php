<?php
    $host = "localhost";
    $dbname = "test2";
    $user = "root";
    try {
        $con = new PDO("mysql:host=$host;dbname=$dbname", $user, '');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
?>
