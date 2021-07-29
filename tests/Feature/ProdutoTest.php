<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProdutoTest extends TestCase
{
    /** @test  */
    public function test_get_produto()
    {
        $responseGet = $this->get('/api/v1/produto/'); //Teste automatico para verificar se conexão com produtos funciona
        $responseGet->assertStatus(200);
    }

    public function test_create_produto()
    {
        $responsePost = $this->post('/api/v1/produto/'); //Teste automatico para verificar se criação com produtos funciona
        $responsePost->assertStatus(200);
    }
    
    public function test_edit_produto()
    {
        $responsePost = $this->put('/api/v1/produto/2'); //Teste automatico para verificar se edição com produtos funciona
        $responsePost->assertStatus(200);
    }

}

