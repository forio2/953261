<?php
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=Assign2;
        charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        include __DIR__.'/DatabaseFunction.php';
    } catch (PDOException $e) {
        echo 'Unable to connect to the database server: ' . $e;
    }
?>