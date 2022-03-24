<?php
    //Answer 1
    echo "<h2>Answer 01</h2>";
    class Phone {
        var $name;
        var $brand;
        var $screen_size;
        var $storage;
        var $memory;
        var $price;
    
        function __construct($name, $brand, $screen_size, $storage, $memory, $price) {
            $this->name = $name;
            $this->brand = $brand;
            $this->screen_size = $screen_size;
            $this->storage = $storage;
            $this->memory = $memory;
            $this->price = $price;
        }

        function show(){
            echo "<h3>$this->name</h3>";
            echo "<ul>
                    <li>$this->brand</li>
                    <li>$this->screen_size</li>
                    <li>$this->storage GB</li>
                    <li>$this->memory GB RAM</li>
                    <li>$this->price</li>
                </ul>";
        }
    }

    $objIphone = new Phone("iPhone XR", "Apple", "828 x 1792 pixels", 256, 3, 3099.00);
    $objGalaxy = new Phone("Galaxy S10", "Samsung", "828 x 1792 pixels", 256, 3, 3099.00);
    $objMoto = new Phone("Moto G7", "Motorola", "828 x 1792 pixels", 256, 3, 3099.00);
    
    $objIphone->show();
    $objGalaxy->show();
    $objMoto->show();
    
    //Answer 2
    echo "<h2>Answer 02</h2>";
    class Calculator {
        var $val1;
        var $val2;
        var $result;

        function sum($val1, $val2){
            $this->result = $val1+$val2;
            echo "<p>$val1 + $val2 = $this->result</p>";
        }

        function sub($val1, $val2){
            $this->result = $val1-$val2;
            echo "<p>$val1 - $val2 = $this->result</p>";
        }
        
        function div($val1, $val2){
            $this->result = $val1/$val2;
            echo "<p>$val1 / $val2 = $this->result</p>";
        }

        function mult($val1, $val2){
            $this->result = $val1*$val2;
            echo "<p>$val1 * $val2 = $this->result</p>";
        }
    }

    $objCalc = new Calculator();
    $objCalc->sum(5,8);
    $objCalc->sub(8,2);
    $objCalc->div(40,8);
    $objCalc->mult(7,8);

?>