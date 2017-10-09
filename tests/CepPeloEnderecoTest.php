<?php

namespace Ilio\BuscadorCep;

use PHPUnit\Framework\TestCase;

class CepPeloEnderecoTest extends TestCase
{
    public function testComCepDeCasa()
    {
        $client = new CepPeloEndereco(87140000);
        $response = $client->buscar();

        $this->assertEquals($response->ibge, 4117503);
    }

    /**
    * @expectedException GuzzleHttp\Exception\ClientException
    */
    public function testComCepInexistente()
    {
        $client = new CepPeloEndereco(99999999999);
        $response = $client->buscar();
    }
}
