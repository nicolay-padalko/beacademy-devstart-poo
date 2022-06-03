<?php

include 'Validador.php';
include 'ValidarBR.php';

$cpf = '123456789';

$br = new ValidarBR();
echo ($br->validarDocumento($cpf));


