<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hit Counter</title>
</head>
<body>
<?php
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=Lab05;
        charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Database connection established.';
    } catch (PDOException $e) {
        echo 'Unable to connect to the database server: ' . $e;
    }
    $sql = "INSERT INTO Count (id) VALUES (NULL)";
    $pdo->exec($sql);

    $pdoStmt = $pdo->query('Select * FROM Count');
    $count = $pdoStmt->fetchAll();
?>
    <h1>There have been <?php echo count($count); ?> hits to this page!</h1>
</body>
</html>