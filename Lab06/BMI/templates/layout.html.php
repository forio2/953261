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
    <header>
        <h1 class="head">BMIs Database</h1>
    </header>
    <nav class="nav">
    <a href="index.php">| Home </a> 
    <a href="BMIs.php">| BMIs List |</a>
    <a href="addBMI.php"> Add a new BMI |</a>
    </nav>
    <main>
        <?php 
            echo $output;
        ?>
    </main>
    <footer style="margin-top: 600px; margin-left: 450px">
        <?php 
            include __DIR__.'/footer.html.php';
        ?>
    </footer>
</body>
</html>