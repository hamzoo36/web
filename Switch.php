<?php
echo "Switch Statement";
echo "<br>";
$percent = 84 ;
switch ($percent) {
    case ($percent>=90):
        echo "A+";
        break;
    case ($percent>=85):
        echo "A";
        break;
    case ($percent>=80):
        echo "B";
        break;
    default:
        echo "Fail";
}
echo "<br>";

$days = "Wednesday";
 switch ($days){
    case "Monday":
        echo "Chinese Rice";
        break;
    case "Tuesday":
        echo "Meat";
        break;
    case "Wednesday":
        echo "Chicken Handy";
        break;
    case "Thursday":
        echo "Chicken Rosh";
        break;
    case "Friday":
        echo "Chicken Biryani";
        break;
    case "Saturday":
        echo "Vegetables";
        break;
    default:
        echo "Ghar ja AAj Chutti hai";
 }
?>