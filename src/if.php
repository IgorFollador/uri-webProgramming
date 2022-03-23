<?php

echo "<h2>Answer 01</h2>";
$N = 2; 
$result;
if($N >= 0) {
    $result = $N*3;
    echo "<p>Valor positivo N = $N<br>$N * 3 = $result</p>";
} else {
    $result = N*2;
    echo "<p>Valor positivo N = $N<br>$N * 2 = $result</p>";
}

echo "<br><h2>Answer 02</h2>";
$v1 = -5;
$v2 = 5;
$v3 = 0;

if($v1 < $v2){
    if($v2<$v3) echo "<p>Maior valor é $v3</p>";
    else echo "<p>Maior valor é $v2</p>";
}else if($v1>$v3) echo "<p>Maior valor é $v1</p>";

echo "<br><h2>Answer 03</h2>";
$num=90;
if($num%2 == 0){
    $result = $num+5;
    echo "<p>PAR<br>$num + 5 = $result</p>";
}else{
    $result = $num+3;
    echo "<p>IMPAR<br>$num + 3 = $result</p>";
}

echo "<br><h2>Answer 04</h2>";
if($v1%2==0 && $v2%2==0){
    echo "<p>AMBOS SÃO PARES</p>";
} else if($v1%3==0 && $v2%3==0)echo "<p>AMBOS SÃO PARES</p>";
else echo "<p>VALORES DISTINTOS</p>";
?>