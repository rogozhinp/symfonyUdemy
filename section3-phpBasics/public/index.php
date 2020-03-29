<?php

require __DIR__.'/../vendor/autoload.php';


use App\Format\JSON;
use App\Format\XML;
use App\Format\YAML;
use App\Format\BaseFormat;
use App\FromStringInterface;
use App\NamedFormatInterface;

print_r("Typed arguments and return types");
echo "<br/>";

function convertData(BaseFormat $format)
{
  return $format->convert();
}

function getFormatName(NamedFormatInterface $format)
{
  return $format->getName();
}


$data = [
  "name" => "John",
  "surname" => "Doe"
];
$json = new JSON();
var_dump(convertData($json));
var_dump(getFormatName($json));
