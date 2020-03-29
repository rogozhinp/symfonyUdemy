<?php

require __DIR__.'/../vendor/autoload.php';


use App\Format\JSON;
use App\Format\XML;
use App\Format\YAML;
use App\Format\BaseFormat;
use App\FromStringInterface;
use App\NamedFormatInterface;

print_r("Interfaces");
echo "<br/>";


$data = [
  "name" => "John",
  "surname" => "Doe"
];

$json = new JSON($data);
$xml = new XML($data);
$yml = new YAML($data);
// $base = new BaseFormat($data);

// echo "<br/>";
// var_dump($json);
// echo "<br/>";
// var_dump($xml);
// echo "<br/>";
// var_dump($yml);
// echo "<br/>";
// // var_dump($base);
// echo "<br/>";

print_r("Result of conversion");

$formats = [$json, $xml, $yml];

foreach ($formats as $format) {
  if($format instanceof NamedFormatInterface)
  {
    var_dump($format->getName());
  }
  var_dump($format->convert());
  var_dump($format instanceof FromStringInterface);

  if($format instanceof FromStringInterface)
  {
    echo "<br/>";
    var_dump($json->convertFromString('{"name": "John", "surname": "Doe"}'));
  }
}
