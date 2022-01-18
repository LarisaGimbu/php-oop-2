<?php
require_once __DIR__ . '/Product.php';

class OldProduct extends Product {
  private $expiration;

  function __construct($_name, $_price, $_expiration)
  {
    parent::__construct($_name, $_price);
    $this->expiration = $_expiration;
    $this->discount = 30;
  }

  public function setDiscount($_discount)
  {
    if((date("Y/m/d") - date($this->expiration)) > 1){
      $this->discount += 50;
    }

    $this->discount += $_discount;
  }
}