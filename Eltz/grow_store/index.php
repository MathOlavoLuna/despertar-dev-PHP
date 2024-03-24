<?php
require_once("./model/user.php");
require_once('./data/user_data.php');
require_once('./model/product.php');
require_once('./data/product_data.php');
require_once('./data/comment_data.php');
require_once("./model/comment.php");


$newUser = new User('pedro','pedro@bol.com','1234');
// $newUser2 = new User('José','jose@bol.com','5555');
$userData = $newUser->add($userData);

// $userData = $newUser2->add($userData);

$newProduct = new Product('Lápis', 'Escreve bem', '2');
$newProduct2 = new Product('caneta', 'cor azul', '3');
$productData = $newProduct->add($productData);
$productData = $newProduct2->add($productData);





$newComment = new Comment('12.03', 'Produto muito bom', $newProduct2->getId(), '1');
$newComment2 = new Comment('13.03', 'Produto medio', $newProduct2->getId(), '4');
$newComment3 = new Comment('15.03', 'bom', $newProduct->getId(), '3');
$commentData = $newComment->add($commentData);
$commentData = $newComment2->add($commentData);
$commentData = $newComment3->add($commentData);

$newComment->editComent($newComment->getId(), $commentData, 'mudei Porra');
// Comment::show($newComment->getId() , $commentData);

// User::list($userData);
// Product::show(1, $productData);
// User::show(2, $userData);


Product::getScore($commentData,3,$productData);


$productData = Product::delete(2, $productData);
$commentData = Comment::delete($commentData, 4);

var_dump($commentData);
var_dump($productData);
