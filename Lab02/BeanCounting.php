<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function countBs($x){
        $arr = str_split($x);
        $count = 0;
        foreach($arr as $a){
            if($a == 'B'){
                $count++;
            }
        }
        return $count;
    }

    function countChar($x, $k){
        $arr = str_split($x);
        $count = 0;
        foreach($arr as $a){
            if($a == $k){
                $count++;
            }
        }
        return $count;
    }

    echo "Output of the CountBs(\"BBC\") function is " . countBs("BBC") . "<br>";
    echo "Output of the CountChar(\"kakkerlak\",\"k\") function is " . countChar("kakkerlak","k");
    ?>
</body>
</html>
