<?php
require_once("./model/user.php");
require_once('./model/product.php');
require_once('./data/user_data.php');
require_once("./data/product_data.php");

$newUser = new User('pedro','pedro@bol.com','1234');
$newUser2 = new User('José','jose@bol.com','5555');

$newProduct = new Product('Relógio', 'Relogio de bolso', 150, 4.5);


$userData = $newUser->add($userData);

$productData = $newProduct->add($productData);


// $userData = $newUser2->add($userData);

// User::list($userData);
Product::show(1, $productData);
User::show(1, $userData);