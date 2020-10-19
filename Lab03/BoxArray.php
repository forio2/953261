<?php
$box = array(
    "Small box" => array(
        "Length" => 12,
        "Width" => 10,
        "Depth" => 2.5,
    ),
    "Medium box" => array(
        "Length" => 30,
        "Width" => 20,
        "Depth" => 4,
    ),
    "Large box" => array(
        "Length" => 60,
        "Width" => 40,
        "Depth" => 11.5,
    )
    );

foreach($box as $name => $x){
    $volume = 1;
    $volume = ($volume*$x['Length']*$x['Width']*$x['Depth']);
    $value = "(" . $x['Length'] . "*" . $x['Width'] . "*" . $x['Depth'] . ")";
    echo "$name has volume of ". $volume . " $value" ."<br>";
}
?>