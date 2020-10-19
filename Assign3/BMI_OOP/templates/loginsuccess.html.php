<h1>Login Successful</h1>
<p>You are now Logged in</p>
<?php
    session_start();
    echo $_SESSION['sql']."eiei";
    if($_SESSION['chk'] == true){
        echo "kk";
    }else{
        echo "nope";
    }
?>