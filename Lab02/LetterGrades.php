<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function checkGrade(){
        if($_GET['grade'] == 'A'){
            return "Your grade is excellent.";
        }
    }
    ?>
    <form action = "LetterGrades.php" method="get">
        <p>Grade: <input type="text" name="grade"/> 
        <input type="submit" /></p>
    </form>
    <label><?php echo checkGrade();?></label>
    
</body>
</html>