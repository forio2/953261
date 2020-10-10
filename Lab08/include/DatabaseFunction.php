<?php
    function showlist($pdo){
        $pdoStmt = $pdo->query("SELECT * FROM Song");
        return json_encode($pdoStmt->fetchAll());
    }

    function search($pdo, $name){
        $pdoStmt = $pdo->query("SELECT songname FROM Song WHERE songname = '$name'");
        return json_encode($pdoStmt->fetchAll(PDO::FETCH_ASSOC));
    }

    function add($pdo, $input){
        $inputA = $input['songname'];
        $sql = "INSERT INTO Song (id, songname) 
        VALUES (NULL, '$inputA')";
        $pdo->exec($sql);
    }
?>