<?php
require_once __DIR__ . '/User.php';

class PremiumUser extends User{
  private $gift_card;

  function __construct($_name, $_surname, $_gift_card)
  {
    parent::__construct($_name, $_surname);
    $this->gift_card = $_gift_card;
    $this->discount = 15;
  }

  public function setGiftCard($_gift_card){
    $this->gift_card = $_gift_card;
  }
  public function setDiscount($_discount)
  {
    $this->discount += $_discount;
  }

  public function getGiftcard(){
    return $this->gift_card;
  }
  public function getDiscount()
  {
    return $this->discount;
  }
}
