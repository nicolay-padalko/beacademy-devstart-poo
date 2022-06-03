<?php

include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';
include 'GestorGeral.php';

$c1 = new Cliente('chiq@mail.com', '12345');
$c1->setNome('Chiquin');
$c1->setDataCadastro('01/05/2020');

$g1 = new Gestor('zez@mail.com', '4567', 5500);
$g1->setNome('Zezim');

$gg1 = new GestorGeral('gerla@mail.com', '34567', 6500);
$gg1->setBonusAnual(2500);

var_dump($c1);
var_dump($g1);
var_dump($gg1);
