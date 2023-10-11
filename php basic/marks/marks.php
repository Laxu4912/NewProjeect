<?php
$marks = [
    90,
    88,
    70,
    60,
    58
];
$total = 366;
$percentage = $total/500*100;
$gpa = $percentage/25;

switch($gpa){
    case($gpa > 3.6 && $gpa == 4.0 ):
    echo "Tero grade A+ ho";
    break;

    case($gpa > 3.2 && $gpa < 3.6):
    echo "tero grade A ho";
    break;

    default:
    echo "you are failed";

}
