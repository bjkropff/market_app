<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../vendor/autoload.php";

    $app = new Silex\Application();

    $server = 'mysql:host=localhost;dbname=market';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    $app->register(new Silex\Prodiver\TwigServerProvider(), array(
      'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('inventory.html.twig', array('items' => Item::getAll()));
    });


?>
