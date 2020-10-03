<?php
    function totalBMIs($count){
        echo $count;
    }

    function allBMIs($pdo){
        $pdoStmt = $pdo->query('Select * FROM BMI');
        $table = $pdoStmt->fetchAll();
        return $table;
    }
    function insertBMIs($name, $weight, $height, $BMI, $pdo){
        $sql = "INSERT INTO BMI (id, name, weight, height, BMI) 
        VALUES (NULL, '$name', '$weight', '$height', '$BMI')";
        $pdo->exec($sql);
    }
?>