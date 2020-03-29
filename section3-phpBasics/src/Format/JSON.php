<?php

namespace App\Format;

class JSON extends BaseFormat{



  public function convert()
  {
    return $this->toJSON();
  }


  public function __toString()
  {
    return $this->toJSON();
  }

  private function toJSON()
  {
    return json_encode($this->data);
  }

















}
