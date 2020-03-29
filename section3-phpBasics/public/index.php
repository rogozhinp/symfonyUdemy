<?php

require __DIR__.'/../vendor/autoload.php';

// use App\Format;
// use App\Format as F;
// use App\Format\{JSON,XML,YAML}
use App\Format\JSON;
use App\Format\XML;
use App\Format\YAML;

print_r("Class fields & methods");
echo "<br/>";
// $json = new App\Format\JSON();
// $xml = new App\Format\XML();
// $yml = new App\Format\YAML();

// $json = new F\JSON();
// $xml = new F\XML();
// $yml = new F\YAML();

$json = new JSON([
  "key"=>"value",
  "another_key" => "another_value"
]);
$xml = new XML();
$yml = new YAML();


echo "<br/>";
var_dump($json->getData());
$json->setData([]);
var_dump($json->getData());
// echo "<br/>";
// var_dump($xml);
// echo "<br/>";
// var_dump($yml);
echo "<br/>";
var_dump($json->convert());
// echo "<br/>";
// var_dump(JSON::DATA);
// echo "<br/>";
// var_dump(JSON::convertData());
echo "<br/>";
var_dump((string)$json);
