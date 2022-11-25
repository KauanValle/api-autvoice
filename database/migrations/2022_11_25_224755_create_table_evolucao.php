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
        Schema::create(\App\Models\EvolucaoModel::TABLE, function (Blueprint $table) {
            $table->id();
            $table->string(\App\Models\EvolucaoModel::NOME);
            $table->string(\App\Models\EvolucaoModel::DATA_NASCIMENTO);
            $table->string(\App\Models\EvolucaoModel::EVOLUCAO);
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
        Schema::dropIfExists('table_evolucao');
    }
};
