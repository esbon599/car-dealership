<?php

class Parcel
{
    private $length;
    private $width;
    private $height;
    private $weight;

    function __construct($l,$wid,$h,$w)
    {
        $this->length = $l;
        $this->width = $wid;
        $this->height = $h;
        $this->weight = $w;
    }

    function setLength($new_length)
    {
        $this->length = $new_length;
    }

    function getLength()
    {
        return $this->length;
    }

    function setWidth($new_width)
    {
        $this->width = $new_width;
    }

    function getWidth()
    {
        return $this->width;
    }

    function setHeight($new_height)
    {
        $this->height = $new_height;
    }

    function getHeight()
    {
        return $this->height;
    }

    function setWeight($new_weight)
    {
        $this->weight = $new_weight;
    }

    function getWeight()
    {
        return $this->weight;
    }

    function volume()
    {
        return $this->length * $this->width * $this->height;
    }

    function costToShip()
    {
        return $this->volume() * 0.1;
    }

    function test() {
        echo $this->length;
        echo $this->width;
        echo $this->height;
        echo $this->weight;
    }

}

?>

<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <title>Your package info</title>
    </head>
    <body>
        <h1>Here are your details!</h1>
        <ul>
            <?php
                if($_GET["length"] != 0 && $_GET["width"] != 0 && $_GET["height"] != 0 && $_GET["weight"])
                {
                    //create the parcel object if it has all the inputs
                    $package = new Parcel($_GET["length"], $_GET["width"], $_GET["height"], $_GET["weight"]);

                    echo "<li> Package volume: " . $package->volume() . "</li>";
                    echo "<ul>";
                        echo "<li>Length: " . $package->getLength() . "</li>";
                        echo "<li>Width: " . $package->getWidth() . "</li>";
                        echo "<li>Height: " . $package->getHeight() . "</li>";
                    echo "</ul>";
                    echo "<li> Shipping cost: " . $package->costToShip() . "</li>";
                }
                else {
                    echo "<p>ERROR: You need to complete all inputs.</p>";
                }


            ?>
        </ul>

    </body>
</html>
