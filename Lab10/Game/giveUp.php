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
    <?php
        session_start();
        $ran = $_SESSION['random'];
        echo "<p style='font-size: 400px; text-align: center;'>$ran</p>";
    ?>
    <div class="container">
    <button type="button" onclick="window.location.href = 'game.php'"  class="btn btn-secondary btn-lg btn-primary">Back</button>
    </div>
</body>
</html>