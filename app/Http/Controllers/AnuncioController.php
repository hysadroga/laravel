<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnuncioModel;
use App\Models\VeiculoModel;

class AnuncioController extends Controller
{
    public function formulario()
    {
        // Para criar ou editar, precisa listar veículos para escolher
        $veiculos = VeiculoModel::all();
        return view('anuncio-formulario', ['veiculos' => $veiculos]);
    }

    public function store(Request $request)
    {
        $dados = $request->all();

        if (empty($dados['id'])) {
            AnuncioModel::create($dados);
        } else {
            $anuncio = AnuncioModel::findOrFail($dados['id']);
            $anuncio->update($dados);
        }

        return redirect()->route('anuncio-listar');
    }

    public function listar()
    {
        // Carrega anúncios com veículo relacionado (eager loading)
        $anuncios = AnuncioModel::with('veiculo')->get();
        return view('anuncio-listar', ['anuncios' => $anuncios]);
    }

    public function remover($id)
    {
        AnuncioModel::destroy($id);
        return redirect()->route('anuncio-listar');
    }

    public function editar($id)
    {
        $anuncio = AnuncioModel::findOrFail($id);
        $veiculos = VeiculoModel::all();
        return view('anuncio-formulario', ['anuncio' => $anuncio, 'veiculos' => $veiculos]);
    }
}
