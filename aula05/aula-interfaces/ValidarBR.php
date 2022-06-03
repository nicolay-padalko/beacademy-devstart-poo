<?php

declare(strict_types=1);

class ValidarBR implements Validador
{
    public function validarNome(string $nome): void
    {
        if (strlen($nome) < 3) {
            die('CPF invalido');
        }
    }

    public function validarDocumento(string $documento): void
    {
        if (strlen($documento) !== 11) {
            die('CPF invalido');
        }
    }

    public function validarCodigoPostal(string $codigoPostal): void
    {
        if (strlen($codigoPostal) !== 8) {
            die('CPF invalido');
        }
    }

}