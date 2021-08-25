<?php
echo "Odd Even Numbers";
echo "<br>";
$num = 100;
for($i=1; $i<=$num; $i++){
    if($i % 2 == 0){
        echo $i. " is Even". "\n";
        echo "<br>";
    }
    else{
        echo $i. " is Odd". "\n";
        echo "<br>";
    }
}
?>