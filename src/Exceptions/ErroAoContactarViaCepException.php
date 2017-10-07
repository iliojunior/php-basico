<?php

namespace Ilio\BuscadorCep\Exceptions;

use Exception;

class ErroAoContactarViaCepException extends Exception
{
    //
    public function __construct()
    {
        parent:__construct("Erro ao contactar o serviço de busca de cep");
    }
    
}