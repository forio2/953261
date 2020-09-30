<?php
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=Lab05;
        charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Database connection established.';
    } catch (PDOException $e) {
        echo 'Unable to connect to the database server: ' . $e;
    }
    $sql = "INSERT INTO Inventory (id, make, model, price) VALUES (NULL,'Honda','City','679098.09')";
    $pdo->exec($sql);
    $sql = "INSERT INTO Inventory (id, make, model, price) VALUES (NULL,'Honda','Civic','1279098.09')";
    $pdo->exec($sql);

    $pdoStmt = $pdo->query('Select * FROM Inventory');
    $Inventories = $pdoStmt->fetchAll();
    print_r($Inventories);

    $pdoStmt = $pdo->prepare('Insert into Inventory (id,make,model,price) values(Null,:make,:model,:price)');
    $parameters = array(':make'=>'Toyota',':model'=>'Yaris' ,':price'=>'783097.12');
    $pdoStmt->execute($parameters);
?>