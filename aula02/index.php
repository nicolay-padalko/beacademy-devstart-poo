<?php

include 'produto.php';

$p2 = new Produto();


$p1 = new produto();
$p1 -> setNome('Tenis para corrida');
$p1 -> setValor(299);

$p2 = new produto();
$p2 -> setNome('calça jeans');
$p2 -> setValor(100);

echo($p1->getNome()).PHP_EOL;
echo($p1->getValor());
var_dump($p2);
