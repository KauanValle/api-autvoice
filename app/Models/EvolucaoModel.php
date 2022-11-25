<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvolucaoModel extends Model
{
    use HasFactory;

    const TABLE = 'evolucoes';

    const NOME = 'nome';
    const DATA_NASCIMENTO = 'data_nascimento';
    const EVOLUCAO = 'evolucao';

    protected $fillable = [
        self::NOME,
        self::DATA_NASCIMENTO,
        self::EVOLUCAO
    ];
}
