<?php
echo "Fibonacci";
echo "<br>";
// Fibonacci
$f1 = 0;
$f2= 1;
for ($i=1; $i<=100 ; $i++){
    $f3 = $f1 + $f2;
     $f2 = $f1;
    $f1 = $f3;

    echo $f3 . "\n";
   
}

?>

<?php
// Fibbonacci
$num1 = 0;
$num2 = 1;
echo $num2. "\n";
$limit = 50;
while($limit>0){
    $temp = $num1 + $num2;
    echo $temp. "\n";
    $num1 = $num2;
    $num2 = $temp;
    $limit--;
}
?>