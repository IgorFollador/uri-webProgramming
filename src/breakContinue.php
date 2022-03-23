<?php

    //Answer 1
    echo "<h2>Answer 01</h2>";
    $value = 36;

    echo "<h3>WHILE</h3>";
    $i=0;
    while($i<=1000){
        if($i == $value) break;
        else echo "<p>$i</p>";
        $i++;
    }

    echo "<h3>DO WHILE</h3>";
    $i=0;
    do{
        if($i == $value) break;
        else echo "<p>$i</p>";
        $i++;
    }while($i<=1000);

    echo "<h3>FOR</h3>";
    for($i=0;$i<=1000;$i++){
        if($i == $value) break;
        else echo "<p>$i</p>";
    }

    //Answer 2
    echo "<h2>Answer 02</h2>";
    echo "<h3>WHILE</h3>";
    $val1=30;
    $i=$val1;
    $val2=60;
    $odd=0;
    while($i<=$val2){
        $i++;
        if($i%2 == 0) {
            continue;
        }
        $odd++;
    }
    echo "<p>$odd</p>";

    echo "<h3>DO WHILE</h3>";
    $i=$val1;
    $odd=0;
    do{
        $i++;
        if($i%2 == 0) {
            continue;
        }
        $odd++;
    }while($i<=$val2);
    echo "<p>$odd</p>";

    echo "<h3>FOR</h3>";
    $odd=0;
    for($i=$val1;$i<=$val2;$i++){
        if($i%2 == 0) {
            continue;
        }
        $odd++;
    }
    echo "<p>$odd</p>";

?>