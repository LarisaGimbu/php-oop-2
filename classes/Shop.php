<?php

class Shop {
  private $name;
  private $fondation_year;
  private $users_numb;

  //costruttori
  public function __construct($_name)
  {
    $this->name = $_name;
  }


  //funzioni SET
  public function setName($_name){
    $this->name = $_name;
  }
  public function setFondationYear($_fondation_year){
    $this->fondation_year = $_fondation_year;
  }
  public function setUsersNumb($_users_numb){
    $this->users_numb = $_users_numb;

    try {
      $this->users_numb = $this->checkUsersNumber($_users_numb);
    } catch (Exception $e) {
      echo $e->getMessage();
    }

    
  }

  //funzioni GET
  public function getName(){
    return $this->name;
  }
  public function getFondationYear(){
    return $this->fondation_year;
  }
  public function getUsersNumb(){
    return $this->users_numb;
  }

  //funzioni private

  private function checkUsersNumber($users_numb){
    if(!is_int($users_numb)){
      throw new Exception('Il numero degli utenti deve essere un numero');
    }
  }
}