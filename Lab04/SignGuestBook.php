<?php
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
if($fname == NULL || $lname == NULL){
?>
    <script> 
    alert("You must enter your first and last name!");
    window.location.href = "ShowGuestBook.php";
    </script>
<?php
}
$handle = fopen("Guestbook.txt", "a");
fwrite($handle, "$fname, $lname\n");
fclose($handle);
?>
<script> window.location.href = "GuestBook.html"; </script>