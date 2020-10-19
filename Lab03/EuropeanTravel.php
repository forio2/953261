<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $Distances = array(
        "Berlin" => array(
            "Berlin" => 0,
            "Moscow" => 1607.99,
            "Paris" => 876.96,
            "Prague" => 280.34,
            "Rome" => 1181.67,
        ),
        "Moscow" => array(
            "Berlin" => 1607.99,
            "Moscow" => 0,
            "Paris" => 2484.92,
            "Prague" => 1664.04,
            "Rome" => 2374.26
        ),
        "Paris" => array(
            "Berlin" => 876.96,
            "Moscow" => 641.31,
            "Paris" => 0,
            "Prague" => 885.38,
            "Rome"=> 1105.76),
        "Prague" => array(
            "Berlin" => 280.34,
            "Moscow" => 1664.04,
            "Paris" => 885.38,
            "Prague" => 0,
            "Rome" => 922
        ),
        "Rome" => array(
            "Berlin" => 1181.67,
            "Moscow" => 2374.26,
            "Paris" => 1105.76,
            "Prague" => 922,
            "Rome" => 0
        )
    );
if(isset($_POST['Start']) && isset($_POST['Start'])){
    $StartIndex = $_POST['Start'];
    $EndIndex = $_POST['End'];

$Value = 0;
foreach($Distances as $city => $km){
    if($StartIndex == $city){
        $Value = $km[$EndIndex];
    }
}
$KMtoMiles = 0.62*$Value;
$miles = number_format($KMtoMiles,2);
echo "The distance from $StartIndex to $EndIndex is $Value kilometers, or $miles miles.";
}
?>
<form action="EuropeanTravel.php" method="POST">
    <p>Starting City:<select name="Start">
        <?php
        foreach ($Distances as $City => $OtherCities) {
            echo "<option value='$City'";
            if (strcmp($StartIndex, $City) == 0)
            echo " selected";
            echo ">$City</option>\n";
        }
        ?>
        </select>
    </p>
    <p>
            Ending City:<select name="End">
            <?php
            foreach ($Distances as $City => $OtherCities) {
                echo "<option value='$City'";
                if (strcmp($EndIndex, $City) == 0)
                echo " selected";echo ">$City</option>\n";
                }
            ?>
        </select>
    </p>
    <p>
        <input type="submit" name="submit" value="Calculate Distance" />
    </p>
</form>
</body>
</html>