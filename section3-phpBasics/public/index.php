<?php

require __DIR__.'/../vendor/autoload.php';


use App\Format\JSON;
use App\Format\XML;
use App\Format\YAML;
use App\Format\BaseFormat;
use App\FromStringInterface;
use App\NamedFormatInterface;
use App\Serializer;

print_r("Dependency Injection");
echo "<br/>";


$data = [
  "name" => "John",
  "surname" => "Doe"
];

$serializer = new Serializer(new XML());
var_dump($serializer->serialize($data));
