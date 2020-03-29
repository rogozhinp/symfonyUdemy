<?php

namespace App\Format;

class JSON extends BaseFormat{


  public function __toString()
  {
    // return $this->convert();
    return parent::convert();
  }


















}
