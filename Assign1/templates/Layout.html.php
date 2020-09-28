<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <p>There are <?php echo $count?> BMI records.</p>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">
                Name
            </th>
            <th scope="col" >
                BMI
            </th>
        </tr>
        </thead>
            <?php
            $file =  file(__DIR__.'/../includes/BMI.txt');
            $counter = 1;
            foreach($file as $x){
                $split = explode(",", $x);
            ?>
            <tbody>
                <tr>
                    <td>
                      <?php echo "<b>$counter </b>"; ?>
                    </td>
                    <td>
                      <?php 
                        echo "<b>Name:</b> $split[0]<br>"; 
                        echo "<b>BMI</b> $split[1]";
                      ?>
                    </td>
                </tr>
                  <?php 
                $counter++; 
            }
                  ?>
            </tbody>
    </table>
    <p>-------------</p>
    <p>
        <a href="index.php">Add new BMI</a>
    </p>
</body>
</html>