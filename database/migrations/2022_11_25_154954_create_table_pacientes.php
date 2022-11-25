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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->integer(\App\Models\PacienteModel::ID_ENDERECO);
            $table->integer(\App\Models\PacienteModel::ID_RESPONSAVEL);
            $table->string(\App\Models\PacienteModel::NOME);
            $table->string(\App\Models\PacienteModel::OBSERVACOES);
            $table->string(\App\Models\PacienteModel::DATA_NASCIMENTO);
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
        Schema::dropIfExists('table_pacientes');
    }
};
