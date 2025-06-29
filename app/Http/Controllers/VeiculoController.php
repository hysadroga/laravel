<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VeiculoModel;

class VeiculoController extends Controller
{
    public function formulario()
    {
        return view('veiculo-formulario');
    }

    public function store(Request $request)
{
    $request->validate([
        'marca' => 'required|string|max:255',
        'modelo' => 'required|string|max:255',
        'ano' => 'required|digits:4|integer',
        'placa' => 'required|string|max:10',
        'cor' => 'required|string|max:50',
    ]);

    if (empty($request->id)) {
        VeiculoModel::create($request->all());
    } else {
        $veiculo = VeiculoModel::findOrFail($request->id);
        $veiculo->update($request->all());
    }

    return redirect()->route('veiculo-listar');
}

    public function listar()
    {
        $veiculos = VeiculoModel::all();
        return view('veiculo-listar', ['veiculos' => $veiculos]);
    }

    public function remover($id)
    {
        VeiculoModel::destroy($id);
        return redirect()->route('veiculo-listar');
    }

    public function editar($id)
    {
        $veiculo = VeiculoModel::findOrFail($id);
        return view('veiculo-formulario', ['veiculo' => $veiculo]);
    }
}
