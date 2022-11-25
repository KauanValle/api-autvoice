<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Profissional extends Controller
{
    //

    public function cadastrar(Request $request)
    {
        $profissional = new ProfissionalModel();
        $profissional->nome = $request->nome;
        $profissional->email = $request->email;
        $profissional->senha = $request->senha;
        $profissional->data_nascimento = $request->data_nascimento;
        $profissional->observacoes = $request->observacoes;
        $profissional->save();
        return response()->json($profissional);
    }

    public function todosProfissionais()
    {
        $profissionais = ProfissionalModel::all();
        return response()->json($profissionais);
    }

    public function pegarProfissional($id)
    {
        $profissional = Profissional ::find($id);
        return response()->json($profissional);

    }

    public function deletarProfissional($id)
    {
        $profissional = Profissional ::find($id);
        $profissional->delete();
        return response()->json('Profissional deletado com sucesso!');

    }

    public function atualizarProfissional(Request $request, $id)
    {
        $profissional = Profissional ::find($id);
        $profissional->nome = $request->nome;
        $profissional->email = $request->email;
        $profissional->senha = $request->senha;
        $profissional->data_nascimento = $request->data_nascimento;
        $profissional->observacoes = $request->observacoes;
        $profissional->save();
        return response()->json($profissional);
    }


}
