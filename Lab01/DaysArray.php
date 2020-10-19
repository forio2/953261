<?php
$Day = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
printf("The days of the week in English are: ");
for($i=0;$i<7;$i++){
    printf($Day[$i]." ");
}
$Day[0] = "Lundi";
$Day[1] = "Mardi";
$Day[2] = "Mercredi";
$Day[3] = "Jeudi";
$Day[4] = "Vendredi";
$Day[5] = "Samedi";
$Day[6] = "Dimanche";
printf("<br>The days of the week in French are: ");
for($i=0;$i<7;$i++){
    printf($Day[$i]." ");
}
?>