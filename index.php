<?php
require_once __DIR__ . '/classes/Shop.php';
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/OldProduct.php';
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/PremiumUser.php';

//first shop
$new_shop = new Shop('BeautyVera');
$new_shop->setFondationYear(2010);
$new_shop->setUsersNumb(50000);

//first product
$new_product = new Product('Crema idratante', 30);
$new_product->setBrand('Shining');
$new_product->setToUse('Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque consequatur perspiciatis voluptatibus minima rerum tempore laborum, quo possimus suscipit quod omnis enim iure nam mollitia rem hic, obcaecati cupiditate! Quam?');
$new_product->setDiscount(5);

//old product
$old_product = new OldProduct('Hair Sprai', 20, '2020/10/10');
$old_product->setDiscount(5);
$old_product->setBrand('Cien');
$expiration_date = $old_product->getExpiration();

//user
$new_user = new User('Giovanni', 'Giaccomini');
$new_user->setEmail('gigi75@gmail.com');

//premium user
$premium_user = new PremiumUser('Annamaria', 'Dalba', 10);
$premium_user->setDiscount(10);

$premium_discount = $new_product->getFinalPrice()-($new_product->getFinalPrice()*$premium_user->getDiscount())/100;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1> <?php echo $new_shop->getName() ?></h1>
  <p>Il nostro negozio è stato fondato nel <strong><?php echo $new_shop->getFondationYear() ?></strong> e conta ormai più di <strong><?php echo $new_shop->getUsersNumb() ?></strong> utenti sodisfatti, ci farebbe piacere che fossi uno di essi!</p>

  <hr>
  <h3>Buongiorno <?php echo $new_user->getSurname()?> <?php echo $new_user->getName() ?>, </h4>
  <p>Lei ha nel carrello il nostro prodotto <strong><?php echo $old_product->getName() ?></strong> della marca <strong><?php echo $old_product->getBrand() ?></strong>.</p>
  <p>Essendo questo prodotto presente in magazzino da molto tempo le offriamo su di esso uno sconto:</p>
  <ul>
    <li>Prezzo iniziale: <?php echo number_format($old_product->getPrice(), 2, ",", "") ?> euro</li>
    <li>
      Sconto: <?php echo $old_product->getDiscount() ?>%
  </li>
  <li>
    Prezzo finale: <strong><?php echo $old_product->getFinalPrice() ?> euro</strong>
    <?php 
      if((date("Y/m/d") - date($expiration_date)) > 1){
        echo "<h5> NOTA: è stato aggiunto un ulteriore sconto del 50% in quanto il prodotto è scaduto il $expiration_date </h5>";
      } ?>
  </li>
  </ul>

  <hr>
  <h3>Bentornato <?php echo $premium_user->getSurname() ?> <?php echo $premium_user->getName() ?>,</h3>
  <p>Lei ha nel carrello il nostro prodotto <strong><?php echo $new_product->getName() ?></strong> della marca <strong><?php echo $new_product->getBrand() ?></strong>.</p>
  <p>Modalità d'uso: <?php echo $new_product->getToUse() ?></p>

  <ul>
    <li>Prezzo iniziale: <?php echo number_format($new_product->getPrice(), 2, ",", "") ?> euro</li>
    <li>Sconto: <?php echo $new_product->getDiscount() ?>%</li>
    <li>Prezzo finale: <?php echo $new_product->getFinalPrice() ?> euro</li>
  </ul>

  <p>Essendo lei cliente premium, le viene assegnato un buono regalo di <strong><?php echo $premium_user->getGiftcard() ?> euro</strong> e inoltre sullo sconto del prodotto del <strong><?php echo $new_product->getDiscount() ?>%</strong> ha diritto ad un ulteriore sconto del <strong><?php echo $premium_user->getDiscount() ?>%</strong>:</p>
  <ul>
    <li>Prezzo finale: <?php echo $new_product->getFinalPrice() ?> euro</li>
    <li>Sconto premium: <?php echo $premium_user->getDiscount() ?>%</li>
    <li><strong>TOTALE: <?php echo number_format($premium_discount, 2, ",", "") ?> euro</strong></li>
  </ul>
  

  
</body>
</html>