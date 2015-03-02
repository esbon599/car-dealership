<?php

class Triangle
{
    private $side1;
    private $side2;
    private $side3;

    function __construct($s1,$s2,$s3)
    {
        $this->side1 = $s1;
        $this->side2 = $s2;
        $this->side3 = $s3;
    }

    function setSide1($new_side)
    {
        $this->side1 = $new_side;
    }

    function getSide1()
    {
        return $this->side1;
    }

    function setSide2($new_side)
    {
        $this->side2 = $new_side;
    }

    function getSide2()
    {
        return $this->side2;
    }

    function setSide3($new_side)
    {
        $this->side3 = $new_side;
    }

    function getSide3()
    {
        return $this->side3;
    }

    function getTriangleType()
    {
        if ($this->getSide1()==$this->getSide2() && $this->getSide2()==$this->getSide3() && $this->getSide1()==$this->getSide3())
        {
            echo "Equilateral!";
        }
        elseif ($this->getSide1()==$this->getSide2() || $this->getSide2()==$this->getSide3() || $this->getSide1()==$this->getSide3())
        {
            echo "Isosceles!";
        }
        else
        {
            echo "Scalene!";
        }
    }
}

$input1 = $_GET["side1"];
$input2 = $_GET["side2"];
$input3 = $_GET["side3"];

if($input1 && $input2 && $input3)
{
    $inputs = array($input1,$input2,$input3);

    var_dump($inputs);

    sort($inputs);

    var_dump($inputs);

    if($inputs[0]+$inputs[1]>$inputs[2])
    {
        $triangle = new Triangle($input1, $input2, $input3);
        $triangle->getTriangleType();
    } else
    {
        echo "Your sides are not valid, fool!";
    }

}

?>
