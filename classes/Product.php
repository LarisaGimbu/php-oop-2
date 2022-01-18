<?php

class Product {
  private $name;
  private $brand;
  private $price;
  private $to_use;
  protected $discount = 0;

  //costruttori
  public function __construct($_name, $_price)
  {
    $this->name = $_name;
    $this->price = $_price;
  }

  //funzioni SET
  public function setName($_name){
    $this->name = $_name;
  }
  public function setPrice($_price){
    $this->price = $_price;
  }
  public function setBrand($_brand){
    $this->brand = $_brand;
  }
  public function setToUse($_to_use){
    $this->to_use = $_to_use;
  }
  public function setDiscount($_discount){
    $this->discount = $_discount;
  }

  //funzioni GET
  public function getName(){
    return $this->name;
  }
  public function getPrice(){
    return $this->price;
  }
  public function getBrand(){
    return $this->brand;
  }
  public function getToUse(){
    return $this->to_use;
  }
  public function getDiscount(){
    return $this->discount;
  }

  //prezzo finale
  public function getFinalPrice(){
    $finalPrice = $this->price - (($this->price * $this->discount) / 100);
    return number_format($finalPrice, 2, ",", "");
  }
}