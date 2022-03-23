<?php

    //Answer 1
    echo "<h2>Answer 01</h2>";
    for($i=0;$i<=1000;$i++){
        if($i%2 == 0) echo "<p>$i</p>";
    }

    //Answer 2
    echo "<h2>Answer 02</h2>";
    for($val1=300, $val2=400; $val1<=$val2;$val1+=5){
       echo "<p>$val1</p>";
    }

?>