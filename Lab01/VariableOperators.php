<?php
$w =5;
$x =25;
$y = 13;
$z = 101;
print("w = $w\n <br>". "x = $x\n <br>"."y = $y\n <br>". "z = $z\n <br>");
$a = $w + $x;
$b = $z - $y;
$c = $z / $w;
$d = $y * $x;
print("
<br> w + x = ". number_format($a, 1)."
<br> z - y = ". number_format($b, 1)."
<br> z / w = ". number_format($c, 1)."
<br> y * x = ". number_format($d, 1).
"<br>"
);

$a = $a + 1;
$b = $b + 1;
$c = $c - 1;
$d = $d - 1;
echo "A = $a\n"." | ". 
"B = $b\n"." | ". 
"C = $c\n"." | ". 
"D = $d\n<br>";
$wxyz = ($a+=($b+=($c+=$d)));
echo $wxyz;
?>