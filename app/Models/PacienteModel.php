<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PacienteModel extends Model
{
    use HasFactory;

    const TABLE = 'pacientes';

    protected $table = self::TABLE;

    const ID_ENDERECO = 'id_endereco';
    const ID_RESPONSAVEL = 'id_responsavel';

    const NOME = 'nome';
    const DATA_NASCIMENTO = 'data_nascimento';
    const OBSERVACOES = 'observacoes';

    protected $fillable = [
        self::ID_ENDERECO,
        self::ID_RESPONSAVEL,
        self::NOME,
        self::DATA_NASCIMENTO,
        self::OBSERVACOES
    ];
}
