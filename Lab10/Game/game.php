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
        if(!empty($_POST['InputText'])){
            $num = $_POST['InputText'];
            $_SESSION['number'] = $num;
            $ran = $_SESSION['random'];
            $_SESSION['count'] = $_SESSION['count']+1;
            if($num == $ran){
                echo "number $num: correct";
            }else{
                echo "incorrect";
            }
        }
    ?>
    <header>
        <h1>Guessing Game</h1>
    </header>
    <nav class="nav">
    <a href="index.php">&nbsp;| Home </a> 
    <a href="game.php">| Game |&nbsp;</a>
    <a href="reset.php"> Start Over |&nbsp;</a>
    </nav>
    <br>
    <p>you have tries <?php echo $_SESSION['count'];?> times</p>
    <div class="container">
        <form method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Guess a number from 1 to 100</label>
                <input type="text" class="form-control" name="InputText">
                <small id="textHelp" class="form-text text-muted">Guess Yeah.</small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" onclick="window.location.href = 'giveUp.php'" class="btn btn-secondary">Give up</button>
        </form>
    </div>
</body>
</html>