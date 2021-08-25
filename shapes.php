
<?php
echo "Task 1";
echo"<br>";
for ($i=1; $i<=5; $i++){
    
    echo "<br>";

    for ($j=1; $j<=$i; $j++){

        echo "* \n";
    }
    
}
echo"<hr>";
?>
<br>

<?php
echo "Task 2";
echo"<br>";
// Opposite
for ($i=1; $i<=5; $i++){
    for ($j=5; $j>=$i; $j--){

        echo "* ";
    }
    echo "<br>";
}
echo"<hr>";
?>
<br>
<br>

<?php
echo "Task 3";
echo"<br>";
for ($i=1; $i<=5; $i++){
    echo "<br>";
    for ($j=1; $j<=$i; $j++){
           echo "* \n";
    }    
}
echo "<br>";

for ($i=1; $i<=5; $i++){
    for ($j=5; $j>=$i; $j--){
        echo "* ";
    }
    echo "<br>";
}
echo"<hr>";
?>
<br>
<br>

<?php
echo "Task 4";
echo"<br>";

for($i=1; $i<=5; $i++){

    for($j=1; $j<=5; $j++){
        if($i==1 or $j==5 or $i==$j){
            echo"* ";
        }else{
            echo "&nbsp &nbsp";
        }
    
}
echo "<br>";
}
echo"<hr>";
?>
<br>
<br>

<?php
echo "Task 5";
echo"<br>";
for($i=1; $i<=5; $i++){

    for($j=1; $j<=5; $j++){
        if($i==5 or $j==5 or $i+$j==6){
            echo"* ";
        }else{
            echo "&nbsp &nbsp";
        }
    
}
echo "<br>";
}
echo"<hr>";
?>

<br>
<br>
<?php
echo "Task 6";
echo"<br>";
for($i=1; $i<=5; $i++){

    for($j=1; $j<=5; $j++){
        if($i==5 or $j==5 or $i+$j==6){
            echo"* ";
        }else{
            echo "&nbsp &nbsp";
        }
    
}
echo "<br>";
}
for($i=1; $i<=5; $i++){

    for($j=1; $j<=5; $j++){
        if($i==1 or $j==5 or $i==$j){
            echo"* ";
        }else{
            echo "&nbsp &nbsp";
        }
    
}
echo "<br>";
}
echo"<hr>";
?>
<br>
<br>

<?php
echo "Task 7";
echo"<br>";
for($i=1; $i<=5; $i++){

    for($j=1; $j<=5; $j++){
        if($i==5 or $j==5 or $i==1 or $j==1){
            echo"* ";
        }else{
            echo "&nbsp &nbsp";
        }
    
}
echo "<br>";

}
echo"<hr>";
?>
<br>
<br>

 <?php
 echo "Task 8";
 echo "<br>";

for($i=1; $i<=4; $i++){

    for($j=1; $j<=7; $j++){
        if($i==4 or  $i+$j==5 or $j-$i==3 ){
            echo"* ";
        }else{
            echo "&nbsp &nbsp";
        }
    
}
echo "<br>";
}
echo"<hr>";
?> 
<br>
<?php
 echo "Task 9";
 echo "<br>";

for($i=1; $i<=4; $i++){

    for($j=1; $j<=7; $j++){
        if($i==1 or  $i-$j==0 or $j+$i==8 ){
            echo"* ";
        }else{
            echo "&nbsp &nbsp";
        }
    
}
echo "<br>";
}
echo"<hr>";
?> 

<?php
echo "Task 10";
echo"<br>";
$n = 4;
for($i=1; $i<=$n; $i++){
    for($j=1; $j<=(2*$n)-1; $j++){
        if($j>=$n-($i-1) && $j<=$n+($i-1)){
            echo "* ";

        }else{
            echo "&nbsp &nbsp";
        }
    }
    echo"<br>";
    
}
echo"<hr>";
?>
<br>
<br>

<?php
echo "Task 11";
echo"<br>";
$n = 4;
for($i=$n; $i>=1; $i--){
    for($j=1; $j<=(2*$n)-1; $j++){
        if($j>=$n-($i-1) && $j<=$n+($i-1)){
            echo "* ";

        }else{
            echo "&nbsp &nbsp";
        }
    }
    echo"<br>";
}
echo"<hr>";

?>
<br>
<br>

<?php
echo "Task 12";
echo"<br>";
$n = 4;
for($i=1; $i<=$n; $i++){
    for($j=1; $j<=(2*$n)-1; $j++){
        if($j>=$n-($i-1) && $j<=$n+($i-1)){
            echo "* ";

        }else{
            echo "&nbsp &nbsp";
        }
    }
    echo"<br>";
}
for($i=$n-1; $i>=1; $i--){
    for($j=1; $j<=(2*$n)-1; $j++){
        if($j>=$n-($i-1) && $j<=$n+($i-1)){
            echo "* ";

        }else{
            echo "&nbsp &nbsp";
        }
    }
    echo"<br>";
}
echo"<hr>";
?>
<br>
<br>

<?php
/*
echo "Task 8";
echo"<br>";
$n = 10;
for($i=1; $i<=$n; $i++){
    for($j<$n; $j>=1; $j--){
        if($j>$i){
            echo "* ";

        }else{
            echo "&nbsp ";
        }
    }
    echo"<br>";
    
}
echo"<hr>"; */
?>





