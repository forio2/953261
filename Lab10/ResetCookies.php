<?php
    setcookie("visits",0, time() - 3600 * 24 * 365);
?>
<p>Cookies have been reset.</p>
<a href="LastVisit.php">Back</a>