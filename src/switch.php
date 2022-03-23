<?php

//Answer 1
echo "<h2>Answer 01</h2>";
$carA = 12;
$carB = 9;
$carC = 8;
$space = 250; //Percurso de 250km
switch ($carA) {
    case $carA:
        $aux = $space/$carA;
        echo "<p>$space / $carA = $aux</p>";
        break;
    case $carB:
        $aux = $space/$carB;
        echo "<p>$space / $carB = $aux</p>";
        break;
    case $carC:
        $aux = $space/$carC;
        echo "<p>$space / $carC = $aux</p>";
        break;
}

//Answer 2
echo "<br><h2>Answer 02</h2>";
$day=3;
switch ($day) {
    case 1:
        echo "<p>DOMINGO</p>";
        break;
    case 2:
        echo "<p>SEGUNDA-FEIRA</p>";
        break;
    case 3:
        echo "<p>TERÇA-FERIA</p>";
        break;
    case 4:
        echo "<p>QUARTA-FEIRA</p>";
        break;
    case 5:
        echo "<p>QUINTA-FEIRA</p>";
        break;
    case 6:
        echo "<p>SEXTA-FEIRA</p>";
        break;
    case 7:
        echo "<p>SABÁDO</p>";
        break;           
    default:
        echo "<p>DIA NAO RECONHECIDO</p>";
        break;
}

//Answer 3
echo "<br><h2>Answer 03</h2>";
$month=3    ;
switch ($month) {
    case $month > 0 && $month <= 3 || $month == 6 || $month == 7:
        echo "<p>ALTA TEMPORADA</p>";
        break;
    default:
        echo "<p>BAIXA TEMPORADA</p>";
        break;
}
?>