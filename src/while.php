<?php

//Answer 1
echo "<h2>Answer 01</h2>";
echo "<h3>Answer A)</h3>";
$i=0;
while($i<=1000){
    if($i%9 == 0) echo "<p>$i É DIVISÍVEL POR 9</p>";
    $i++;
}

echo "<h3>Answer B)</h3>";
$i=0;
do{ 
    if($i%9 == 0) echo "<p>$i É DIVISÍVEL POR 9</p>";
    $i++;
}while($i<=1000);
    

//Answer 2
echo "<h2>Answer 02</h2>";
echo "<h3>Answer A)</h3>";
$val1 = 2;
$val2 = 200;
$i=0;
while($i<$val2){
    if($i == ($val2-$val1)/2) echo "<p>CHEGUEI NA METADE | i = $i</p>";
    $i++;
}

echo "<h3>Answer B)</h3>";
$val1 = 2;
$val2 = 200;
$i=0;
do{
    if($i == ($val2-$val1)/2) echo "<p>CHEGUEI NA METADE | i = $i</p>";
    $i++;
}while($i<$val2)
?>