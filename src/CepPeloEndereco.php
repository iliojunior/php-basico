<?php

namespace Ilio\BuscadorCep;

use GuzzleHttp\Client;
use Ilio\BuscadorCep\Exception\ErroAoContactarViaCepException;
use Ilio\BuscadorCep\Interfaces\IBuscable;

class CepPeloEndereco implements IBuscable
{
    protected $cep;

    public function __construct($cep)
    {
        $this->cep = $cep;
    }

    public function buscar()
    {
        $client = new Client();

        $url = sprintf('https://viacep.com.br/ws/%s/json', $this->cep);
        $response = $client->request('GET', $url);
        
        return json_decode($response->getBody());
    }
}
