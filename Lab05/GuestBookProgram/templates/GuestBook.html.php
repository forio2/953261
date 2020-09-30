<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<body>
    <h2>Enter your name to sign our guest book</h2>
    <form action="SignGuestBook.php" method="post">
        <p>First Name <input type="text" name="first_name" /></p>
        <p>Last Name <input type="text" name="last_name" /></p>
        <p><input type="submit" value="submit" name ="submit"/></p>
    </form>
</body>
</html>