<?php
$one = $_POST['one'];
$two = $_POST['two'];
$three = $_POST['three'];

if($one < $two+$three && $two < $one+$three && $three < $one+$two){
?>
    <script language = "javascript">
    alert('Yessss');
    window.location.href='Triangle.html';
    </script>
<?php
}
else{
?>
    <script language = "javascript">
    alert('Nopeee');
    window.location.href='Triangle.html';
    </script>
<?php
}
?>