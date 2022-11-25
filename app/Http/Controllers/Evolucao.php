<?php

namespace App\Http\Controllers;

use App\Models\EvolucaoModel;
use App\Models\PacienteModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Evolucao extends Controller
{
    public function cadastrar(Request $request)
    {
        $novaEvolucao = new EvolucaoModel();
        $novaEvolucao->fill($request->toArray());
        $novaEvolucao->save();

        return response()->json($novaEvolucao);
    }

    public function pegarEvolucao($id)
    {
        return DB::table(EvolucaoModel::TABLE)->find($id);
    }

    public function deletarEvolucao($id)
    {
        DB::table(EvolucaoModel::TABLE)->delete($id);
        return response()->json(["message" => "Evolucao deletada!"]);
    }

    public function atualizarEvolucao(Request $request, $id)
    {
        $atualizar = [];

        if(!empty($request->nome))
        {
            $atualizar['nome'] = $request->nome;
        }

        if(!empty($request->data_nascimento))
        {
            $atualizar['data_nascimento'] = $request->data_nascimento;
        }

        if(!empty($request->evolucao))
        {
            $atualizar['evolucao'] = $request->evolucao;
        }

        DB::table(EvolucaoModel::TABLE)->where('id', $id)->update($atualizar);

        return \response()->json(['message' => 'Evolução atualizada!']);
    }
}
