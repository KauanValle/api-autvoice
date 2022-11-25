<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(\App\Models\ProfissionalModel::TABLE, function (Blueprint $table) {
            $table->id();
            $table->string(\App\Models\ProfissionalModel::NOME);
            $table->string(\App\Models\ProfissionalModel::SENHA);
            $table->string(\App\Models\ProfissionalModel::CRM);
            $table->string(\App\Models\ProfissionalModel::DADOS);
            $table->string(\App\Models\ProfissionalModel::DATA_NASCIMENTO);
            $table->string(\App\Models\ProfissionalModel::EMAIL);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
