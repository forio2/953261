<?php
    function insertQuestion($qtopic, $qdetail, $qname, $pdo){
        $sql = "INSERT INTO Question (qno, qtopic, qdetail, qname, qcount) 
        VALUES (NULL, '$qtopic', '$qdetail', '$qname', 0)";
        $pdo->exec($sql);
    }

    function allQuestion($pdo){
        $pdoStmt = $pdo->query('Select * FROM Question');
        $table = $pdoStmt->fetchAll();
        return $table;
    }

    function Question($pdo , $a){
        $pdoStmt = $pdo->query('Select * FROM Question WHERE qno = $a');
        $table = $pdoStmt->fetchAll();
        return $table;
    }

    function insertAnswer($aquestionno, $adetail, $aname, $pdo){
        $sql = "INSERT INTO Answer (aquestionno, ano, adetail, aname) 
        VALUES ('$aquestionno', NULL, '$adetail', '$aname')";
        $pdo->exec($sql);
    }
?>