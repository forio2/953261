<?php
session_start();
session_destroy();
session_start();
$ran = rand(1,100);
$_SESSION['count'] = 0;
$_SESSION['random'] = $ran;
header("location:game.php");

?>