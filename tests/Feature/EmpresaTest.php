<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EmpresaTest extends TestCase
{
    use RefreshDatabase;

    public function test_crear_empresa()
    {
        $response = $this->postJson('/api/empresas', [
            'nit' => '12345',
            'nombre' => 'Empresa Demo',
            'direccion' => 'Calle 123',
            'telefono' => '3001234567'
        ]);

        $response->assertStatus(201)
                 ->assertJson(['nit' => '12345']);
    }
}
