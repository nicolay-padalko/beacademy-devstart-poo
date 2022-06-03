<?php

include 'Aluno.php';
include 'Professor.php';
include 'Curso.php';

$a1 = new Aluno();
$a1 -> nome = 'Nicolay';
$a1 -> cpf = '123.456.789-10';

$cursoPHP = new Curso();
$cursoPHP -> nome = 'Introdução ao PHP';
$cursoPHP -> descricao = 'Aprender o basico e intermediario do PHP';

echo "<h1> Aluno: {$a1 -> nome}</h1>";

$p1 = new Professor();
$p1 -> nome = 'Jacare';
$p1 -> cpf = '234.445.445.-90';
$p1 -> salario = 2000;

echo "<h1> Prof: {$p1 -> nome}</h1>";
echo "<h1> cpf: {$p1 -> cpf}</h1>";

//curso
//professor
//disciplina

