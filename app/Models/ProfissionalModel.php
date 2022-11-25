<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfissionalModel extends Model
{
    use HasFactory;

    const TABLE = 'profissionais';

    protected $table = self::TABLE;

        const NOME = 'nome';
        const DATA_NASCIMENTO = 'data_nascimento';
        const CRM = 'crm';
        const EMAIL = 'email';
        const DADOS ='dados';
        const SENHA ='senha';

        protected $fillable = [
            self::CRM,
            self::NOME,
            self::DATA_NASCIMENTO,
            self::DADOS,
            self::SENHA,
            self::EMAIL
        ];

}
