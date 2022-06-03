<?php
declare(strict_types=1);

class Categoria
{
    public function __construct(
        private string $nome,
        private string $descricao
    ){
    }
}