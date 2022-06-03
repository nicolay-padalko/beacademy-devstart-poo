<?php

include 'Produto.php';
include 'Categoria.php';

$c1 = new Categoria('Roupas', 'Roupas Unissex');
$c2 = new Categoria('Roupas de Banho', 'Toalhas, roupão');
$c3 = new Categoria('Calçados', 'Calçados em geral');

$p1 = new Produto('Tenis', 290, $c3);

$p2 = new Produto('Calça jeans', 100, $c1);

$p3 = new Produto('Shorts', 145.60, $c1);


var_dump($p1);
var_dump($p2);
var_dump($p3);
