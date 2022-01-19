<?php

trait Address {
  public $town;
  public $country;
  public $number;

  public function getFullAddress(){
    return "$this->town, $this->country, $this->number";
  }

}