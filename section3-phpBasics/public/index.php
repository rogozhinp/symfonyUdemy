<?php

require __DIR__.'/../vendor/autoload.php';


use App\Kernel;

print_r("Annotations");
echo "<br/>";

$kernel = new Kernel();
$kernel->boot();
$container = $kernel->getContainer();

var_dump($container->getServices());
var_dump($container->getService('App\\Controller\\IndexController')
->index());
var_dump($container->getService('App\\Controller\\PostController')
->index());
