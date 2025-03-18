<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('platosPedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idPlato');
            $table->unsignedBigInteger('idPedido');
            $table->foreign('idPlato')->references('id')->on('platos');
            $table->foreign('idPedido')->references('id')->on('pedidos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('platosPedidos');
    }
};
