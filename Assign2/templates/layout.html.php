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
        <h1 class="head">Web board</h1>
    </header>
    <nav class="nav">
    <a href="index.php">| Home </a> 
    <a href="insert_question.php">| New Topic |</a>
    <a href="show_question.php"> Show topics |</a>
    </nav>
    <main>
        <?php 
            echo $output;
        ?>
    </main>
    <footer class="footer">
        <?php 
            include __DIR__.'/footer.html.php';
        ?>
    </footer>
</body>
</html>