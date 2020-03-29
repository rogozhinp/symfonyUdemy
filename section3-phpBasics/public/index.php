<?php

require __DIR__.'/../vendor/autoload.php';


use App\Format\JSON;
use App\Format\XML;
use App\Format\YAML;
use App\Format\BaseFormat;
use App\FromStringInterface;
use App\NamedFormatInterface;
use App\Service\Serializer;
use App\Controller\IndexController;
use App\Container;
use App\Fromat\FormatInterface;

print_r("Simple Service Container");
echo "<br/>";




$serializer = new Serializer(new JSON());
$controller = new IndexController($serializer);

$container = new Container();

$container->addService('format.json', function() use ($container){
  return new JSON();
});
$container->addService('format.xml', function() use ($container){
  return new XML();
});
$container->addService('format', function() use ($container){
  $container->getService('format.json');
});
$container->addService('serializer', function() use ($container){
  return new Serializer($container->getService('format'));
});
$container->addService('controller.index', function() use ($container){
  return new Serializer($container->getService('serializer'));
});

var_dump($controller = $container->getService('controller.index')->index());
