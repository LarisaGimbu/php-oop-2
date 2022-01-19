<?php
require_once __DIR__ . '/Address.php';

class User {
  private $name;
  private $surname;
  private $email;
  private $discount = 0;

  //trait
  use Address;

  //costruttori
  function __construct($_name, $_surname)
  {
    $this->name = $_name;
    $this->surname = $_surname;
  }

  //funzioni con SET
  public function setName($_name){
    $this->name = $_name;
  }
  public function setSurname($_surname){
    $this->surname = $_surname;
  }
  public function setEmail($_email){
    $this->email = $_email;
  }
  public function setDiscount($_discount){
    $this->discount = $_discount;
  }

  //funzioni con GET
  public function getName(){
    return $this->name;
  }
  public function getSurname(){
    return $this->surname;
  }
  public function getEmail(){
    return $this->email;
  }
  public function getDiscount(){
    return $this->discount;
  }
  
}