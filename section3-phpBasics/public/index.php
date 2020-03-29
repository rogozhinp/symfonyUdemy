<?php

require __DIR__.'/../vendor/autoload.php';


use App\Format\JSON;
use App\Format\XML;
use App\Format\YAML;
use App\Format\BaseFormat;
use App\FromStringInterface;
use App\NamedFormatInterface;

print_r("Anonymous functions");
echo "<br/>";


$data = [
  "name" => "John",
  "surname" => "Doe"
];

$formats = [
  new JSON($data),
  new XML($data),
  new YAML($data)
];


function findByName(string $name, array $formats): ?BaseFormat {
  $found = array_filter($formats, function ($format) use ($name){
    return $format->getName() === $name;
  });

  if(count($found)){
    return reset($found);
  }
  return null;
}

var_dump(findByName('NoExisting', $formats));
