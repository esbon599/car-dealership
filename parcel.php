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

    function test() {
        echo $this->length;
        echo $this->width;
        echo $this->height;
        echo $this->weight;
    }

}

$package = new Parcel(14,44,32,21);

$package->test();

$package->setWeight(123);

echo "<br />" .$package->getWeight();
?>
