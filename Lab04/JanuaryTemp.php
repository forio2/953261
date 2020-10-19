<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $January = "48,42,68\n";
    $January .= "48,42,69\n";
    $January .= "49,42,69\n";
    $January .= "49,42,61\n";
    $January .= "49,42,65\n";
    $January .= "49,42,62\n";
    $January .= "49,42,62\n";
    file_put_contents('sfjanaverages.txt', $January);
    $file = file('sfjanaverages.txt');
    $count = 1;
    foreach($file as $x){
        $split = explode(",", $x);
        echo "<b>Day$count </b><br>";
        echo "Mean: $split[0] <br>";
        echo "Low: $split[1] <br>";
        echo "High: $split[2] <br><br>"; 
        $count++;
    }
    ?>
</body>
</html>