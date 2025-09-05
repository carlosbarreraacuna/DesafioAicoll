<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Empresa;

class EmpresaSeeder extends Seeder
{
    public function run(): void
    {
        $empresas = [
            [
                'nit' => '900123456',
                'nombre' => 'Empresa Alpha',
                'direccion' => 'Calle 10 #20-30',
                'telefono' => '3001234567',
                'estado' => 'Activo',
            ],
            [
                'nit' => '900654321',
                'nombre' => 'Empresa Beta',
                'direccion' => 'Carrera 15 #45-67',
                'telefono' => '3109876543',
                'estado' => 'Activo',
            ],
            [
                'nit' => '800987654',
                'nombre' => 'Empresa Gamma',
                'direccion' => 'Avenida Siempre Viva 123',
                'telefono' => '3205551234',
                'estado' => 'Inactivo',
            ],
        ];

        foreach ($empresas as $data) {
            Empresa::create($data);
        }
    }
}
