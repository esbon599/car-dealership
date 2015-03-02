<?php

$porsche_img = "http://hdwallpapersd.com/wp-content/uploads/2014/09/awesome-porsche-911-turbo-picture.jpg";
$ford_img = "http://www.thedieselstop.com/forums/attachments/f122/9386d1293229464-ford-f450-22-5-rims-dsc00114.jpg";
$lexus_img = "http://static.usnews.rankingsandreviews.com/images/Auto/izmo/367633/2015_lexus_rx_350_sideview.jpg";
$mercedes_img = "http://www.blogcdn.com/www.autoblog.com/media/2011/08/02-2012-mercedes-benz-cls550-review.jpg";


class Car
{
    private $make_model;
    private $price;
    private $miles;
    private $image;

    function __construct($mm, $p, $mi, $im)
    {
        $this->make_model = $mm;
        $this->price = $p;
        $this->miles = $mi;
        $this->image = $im;
    }

    function getImg() {
        return $this->image;
    }

    function setImg($setImg) {
        $this->image = $setImg;
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

$porsche = new Car("2014 Porsche 911", 114991, 7864, $porsche_img);
//$porsche->setMake_model("haha");

$ford = new Car("2011 Ford F450", 55995, 14241, $ford_img);
$ford->setPrice("12");

$lexus = new Car("2013 Lexus RX 350", 44700, 20000, $lexus_img);

$mercedes = new Car("Mercedes Benz CLS550", 39900, 37979, $mercedes_img);

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
                    echo '<img src="' . $car->getImg() . '">';
                echo "</ul>";
            }
        ?>
        </ul>
    </body>
</html>
