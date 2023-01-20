<?php

class Car {
    public $marka, $carClass, $weight, $driver, $engine;

    public $message;

    public function start(){
        $this -> message = "poehali";
        echo $this -> message;
    }
    public function stop(){
        $this -> message = "Ostanavlivaemysa";
        echo $this -> message;

    }
    public function turnRight(){
        $this -> message = "Napravo";
        echo $this -> message;
    }
    public function turnLeft(){
        $this -> message = "Nalevo";
        echo $this -> message;
    }

    function __construct($marka, $carClass, $weight, $driver, $engine) {
        $this ->marka = $marka;
        $this ->carClass = $carClass;
        $this ->weight = $weight;
        $this ->driver = $driver;
        $this ->engine= $engine;
    }
    function __toString(){
        return $this ->marka;
    }

}

class Lorry extends Car {
    public $carrying;
}
class SportCar extends Car {
    public $carrying;
}


class Engine {
    public $power, $performance;
}
class Person {
    public $Fullname;

    function __construct($Fullname) {
        $this ->Fullname = $Fullname;
    }
}
class Driver extends Person {
    public $stazh_vozhdeniya;
    function __construct($Fullname, $stazh_vozhdeniya) {
        parent::__construct($Fullname);
        $this ->stazh_vozhdeniya = $stazh_vozhdeniya;
    }


}


$car1 = new Car("BMW" ,"S", "2t", "olegov", "M50");
echo $car1;
echo '<br>';
$car1 -> start();
echo '<br>';
$car1 -> stop();
echo '<br>';
$car1 -> turnRight();
echo '<br>';
$car1 -> turnLeft();
echo '<br>';
var_dump($car1);
echo '<br>';

$driver1 = new Driver('Olegov Daniyar Aydaruly', "7 years");
var_dump($driver1);

//Askar ya ne ponyal kak sozdat method __toString i s pomoshyu nego kak zabirat dannie s dochernih klassov.

