<?php
$weight = $_POST['weight'];
$height = $_POST['height'];
$arr = array();
//[weight/(height*height)*703]
if(($weight >= 58 && $weight <= 76) && ($height >= 100 && $height <= 200)){
    $BMI = ($weight/($height*$height)*703);
    array_push($arr ,$BMI);
    echo "Array [weight] =>" . $weight . "[height] => " . $height . "<br>";
    echo "Your BMI calculation is $BMI";
}else{
    echo "Please check your weight ang height inputs; weight must be in between 58 and 76 and height must be between 100 and 200 pounds.";
}
?>