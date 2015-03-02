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
            return "Equilateral!";
        }
        elseif ($this->getSide1()==$this->getSide2() || $this->getSide2()==$this->getSide3() || $this->getSide1()==$this->getSide3())
        {
            return "Isosceles!";
        }
        else
        {
            return "Scalene!";
        }
    }
}

$input1 = $_GET["side1"];
$input2 = $_GET["side2"];
$input3 = $_GET["side3"];

$message = "";
$error = "";

if($input1 && $input2 && $input3)
{
    $inputs = array($input1,$input2,$input3);

    sort($inputs);

    if($inputs[0]+$inputs[1]>$inputs[2])
    {
        $triangle = new Triangle($input1, $input2, $input3);
        $message = $triangle->getTriangleType();
    } else
    {
        $error = "Your sides are not valid, fool!";
    }

}
else {
    $error = "Please input values for all sides.";
}

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <title>Triangle Type Analysis</title>
    </head>
    <body>
        <div class="container">
            <h1>Your Triangle's Info</h1>

            <p>
                <?php
                    if($error) {
                        echo $error;
                    } else {
                        echo "Your triangle's type is " . $message;
                    }
                ?>
            </p>
    </body>
</html>
