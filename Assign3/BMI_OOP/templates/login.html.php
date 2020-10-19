<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <br>
    <?php
        if (!empty($errors)) :?>
        <div class="errors">
            <p>Your account could not be login, please check the following:</p>
            <ul>
                <?php
                    foreach ($errors as $error) :?>
                    <li>
                        <?= $error ?>
                    </li>
                    <?php 
                    endforeach; 
                    ?>
            </ul>
        </div>
        <?php
        endif;
        ?>
    <div class="container">
    <form action="" method="POST">
        <label for="name">Your name</label>
        <input name="name" id="name" type="text">
        <label for="password">Password</label>
        <input name="password" id="password" type="password">
        <input type="submit" name="submit" value="Sign in">
    </form>
    <p>Don't have an account? <a href="index.php?action=registerform">Click here to register an account</a></p>
    </div>
</body>
</html>