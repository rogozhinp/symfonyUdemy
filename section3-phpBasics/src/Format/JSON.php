<?php

namespace App\Format;

class JSON extends BaseFormat implements FromStringInterface, NamedFormatInterface, FormatInterface{


  public function convert(): string
  {
    return json_encode($this->data);
  }

  public function convertFromString($string)
  {
    return json_decode($string, true);
  }

  public function getName()
  {
    return 'JSON';
  }


















}
