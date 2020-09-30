<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
        if($fname == NULL || $lname == NULL){
    ?>
            <a href="ShowGuestBook.php">Show Guest Book</a>
            <a href="index.php">Home</a>
            <h1>You must enter your first and last name! Chick your browser's Back button to return to the form.</h1>
    <?php
        }
        else{
            $pdo = new PDO('mysql:host=localhost;dbname=Lab05;charset=utf8', 'root', '');
            $sql = "INSERT INTO GuestBook (id, firstname, lastname) VALUES (NULL, '$fname', '$lname')";
            $pdo->exec($sql);
        
            include __DIR__.'/../templates/Output.html.php';
        }
    ?>
</body>
</html>