<?php
require_once __DIR__ . '/classes/Shop.php';

$new_shop = new Shop('BeautyVera');
$new_shop->setFondationYear(2010);
$new_shop->setUsersNumb(50000);

var_dump($new_shop);
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