<?php
echo "Prime And Composite Numbers";
echo "<br>";
for($a=1; $a<=100; $a++) {
    $f=1;
    for($b=2; $b<=$a-1; $b++){
        if($a % $b == 0){
            echo $a." Composite Number \n";
            echo "<br>";
            $f=0;
            break;
        }
    }
    if($f==1){
        echo $a." Prime Number \n";
        echo "<br>";
    }
}
?>