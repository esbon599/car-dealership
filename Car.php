<?php

class Car
{
    private $make_model;
    private $price;
    private $miles;

    function __construct($mm, $p, $mi)
    {
        $this->make_model = $mm;
        $this->price = $p;
        $this->miles = $mi;
    }

    function getMake_model()
    {
        return $this->make_model;
    }

    function setMake_model($setModel)
    {
        $this->make_model = $setModel;
    }

    function getPrice()
    {
        return $this->price;
    }

    function setPrice($new_price)
    {
        $float_price = (float) $new_price;
        if ($float_price != 0) {
            $this->price = $new_price;
        }
    }

    function getMiles()
    {
        return $this->miles;
    }

    function setMiles()
    {
        $this->miles = $setMiles;
    }

}

$porsche = new Car("2014 Porsche 911", 114991, 7864);
$porsche->setMake_model("haha");

$ford = new Car("2011 Ford F450", 55995, 14241);
$ford->setPrice("12");

$lexus = new Car("2013 Lexus RS 350", 44700, 20000);

$mercedes = new Car("Mercedes Benz CLS550", 39900, 37979);

$cars = array($porsche, $ford, $lexus, $mercedes);

$cars_matching_search = array();
foreach ($cars as $car) {
     if ($car->getPrice() < $_GET["price"]) {
        array_push($cars_matching_search, $car);
    }
}

?>

<!DOCTYPE html>

<html>
    <head>
        <title>Your Car Dealership's Homepage</title>
    </head>
    <body>
        <h1>Your Car Dealership</h1>
        <ul>
            <?php
            foreach ($cars_matching_search as $car) {
                echo "<li>" . $car->getMake_model() . "</li>";
                echo "<ul>";
                    echo "<li> $" . $car->getPrice() . "</li>";
                    echo "<li> Miles: " . $car->getMiles() . "</li>";
                echo "</ul>";
            }
        ?>
        </ul>
    </body>
</html>
