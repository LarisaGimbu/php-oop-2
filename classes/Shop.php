<?php

class Shop {
  private $name;
  private $fondation_year;
  private $users_numb;

  public function __construct($_name)
  {
    $this->name = $_name;
  }

  public function setName($_name){
    $this->name = $_name;
  }
  public function setFondationYear($_fondationYear){
    $this->fondation_year = $_fondationYear;
  }
  public function setUsersNumb($_usersNumb){
    $this->users_numb = $_usersNumb;
  }

  public function getName(){
    return $this->name;
  }
  public function getFondationYear(){
    return $this->fondation_year;
  }
  public function getUsersNumb(){
    return $this->users_numb;
  }
}