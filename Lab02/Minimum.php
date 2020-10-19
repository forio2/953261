<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function minimun($x){
        $count = func_get_args();
        $min = $count[0];
        for($i=0;$i<count($count);$i++){
            if(func_get_arg($i) < $min){
                $min = func_get_arg($i);
            }
        }
        return $min;
    }
    echo minimun(2, 9, 16) . "<br>";
    echo minimun(1, 7, -3);
    ?>
</body>
</html>