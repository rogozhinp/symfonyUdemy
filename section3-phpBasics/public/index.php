<?php

require __DIR__.'/../vendor/autoload.php';

// use App\Format;
// use App\Format as F;
// use App\Format\{JSON,XML,YAML}
use App\Format\JSON;
use App\Format\XML;
use App\Format\YAML;
use App\Format\BaseFormat;

print_r("Abstract classes");
echo "<br/>";


$data = [
  "name" => "John",
  "surname" => "Doe"
];

$json = new JSON($data);
$xml = new XML($data);
$yml = new YAML($data);
// $base = new BaseFormat($data);

echo "<br/>";
var_dump($json);
echo "<br/>";
var_dump($xml);
echo "<br/>";
var_dump($yml);
echo "<br/>";
// var_dump($base);
// echo "<br/>";

print_r("Result of conversation");
var_dump($json->convert());
var_dump($xml->convert());
var_dump($yml->convert());
// var_dump($base->convert());
