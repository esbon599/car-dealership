<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/car.php";

    session_start();

    

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('car_form.twig');

    });

    $app->post("/result", function() use ($app) {
        $car = new Car($_POST['model'], $_POST['price'], $_POST['miles'], $_POST['image']);
        var_dump($car);

        $cars = array($car);


        return $app['twig']->render('result.twig', array('cars' => $cars));
    });

    return $app;


?>
