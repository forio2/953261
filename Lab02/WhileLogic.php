<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Logic</title>
</head>
<body>
<?php
//your nameand student idtoday’s day
$count = 1;
while($count <= 100){
    $num[] = $count;
    $count++;
}
Foreach ($num as $CurNum)
echo "<p>$CurNum</p>";
?>
</body>
</html>