<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nit' => 'required|string|unique:empresas,nit',
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
        ]);

        $empresa = Empresa::create($validated);

        return response()->json($empresa, 201);
    }


    public function show($nit)
    {
        $empresa = Empresa::where('nit', $nit)->firstOrFail();
        return response()->json($empresa);
    }


    public function index()
    {
        return response()->json(Empresa::all());
    }


    public function update(Request $request, $nit)
    {
        $empresa = Empresa::where('nit', $nit)->firstOrFail();

        $validated = $request->validate([
            'nombre' => 'string|max:255',
            'direccion' => 'string|max:255',
            'telefono' => 'string|max:20',
            'estado' => 'in:Activo,Inactivo',
        ]);

        $empresa->update($validated);

        return response()->json($empresa);
    }

    
    public function destroy($nit)
    {
        $empresa = Empresa::where('nit', $nit)->firstOrFail();

        if ($empresa->estado !== 'Inactivo') {
            return response()->json(['error' => 'Solo se pueden eliminar empresas inactivas'], 400);
        }

        $empresa->delete();

        return response()->json(['message' => 'Empresa eliminada correctamente']);
    }
}

