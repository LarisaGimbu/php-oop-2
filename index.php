<?php
require_once __DIR__ . '/classes/Shop.php';
require_once __DIR__ . '/classes/Product.php';

//first shop
$new_shop = new Shop('BeautyVera');
$new_shop->setFondationYear(2010);
$new_shop->setUsersNumb(50000);

//first product
$new_product = new Product('Crema idratante');
$new_product->setPrice(30);
$new_product->setBrand('Shining');
$new_product->setToUse('Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque consequatur perspiciatis voluptatibus minima rerum tempore laborum, quo possimus suscipit quod omnis enim iure nam mollitia rem hic, obcaecati cupiditate! Quam?');
$new_product->setDiscount(5);

var_dump($new_shop);
var_dump($new_product);
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
  
</body>
</html>