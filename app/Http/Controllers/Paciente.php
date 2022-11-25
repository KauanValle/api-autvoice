<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use \App\Models\PacienteModel;
use Illuminate\Support\Facades\DB;

class Paciente extends Controller
{
    public function cadastrar(Request $request)
    {
        $novoPaciente = new PacienteModel();
        $novoPaciente->fill($request->toArray());
        $novoPaciente->save();

        return response()->json($novoPaciente);
    }

    public function todosPacientes()
    {
        return DB::table(PacienteModel::TABLE)->get();
    }

    public function pegarPaciente(int $id)
    {
        return DB::table(PacienteModel::TABLE)->find($id);
    }

    public function deletarPaciente(int $id)
    {
        DB::table(PacienteModel::TABLE)->delete($id);
        return response()->json(["message" => "Paciente deletado!"]);
    }

    public function atualizarPaciente(Request $request, int $id)
    {
        $antigo = $this->pegarPaciente($id);

        $atualizar = [];

        if(!empty($request->id_endereco))
        {
            $atualizar['id_endereco'] = $request->id_endereco;
        }

        if(!empty($request->id_responsavel))
        {
            $atualizar['id_responsavel'] = $request->id_responsavel;
        }

        if(!empty($request->nome))
        {

            $atualizar['nome'] = $request->nome;
        }

        if(!empty($request->observacoes))
        {
            $atualizar['observacoes'] = $request->observacoes;
        }

        if(!empty($request->data_nascimento))
        {
            $atualizar['data_nascimento'] = $request->data_nascimento;
        }


        DB::table(PacienteModel::TABLE)->where('id', $id)->update($atualizar);

        return \response()->json(['message' => 'Paciente atualizado!']);
    }
}
