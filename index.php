<?php

require 'vendor/autoload.php';

$buscador = new Ilio\BuscadorCep\CepPeloEndereco('87140000');
$endereco = $buscador->buscar();

print_r($endereco);