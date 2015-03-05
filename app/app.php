<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/car.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('car_form.php');

    });

    $app->post("/result", function() use ($app) {
        $car = new Car($_POST['model'], $_POST['price'], $_POST['miles'], $_POST['image']);
        var_dump($car);


        return $app['twig']->render('result.php');
    });

    return $app;


?>
