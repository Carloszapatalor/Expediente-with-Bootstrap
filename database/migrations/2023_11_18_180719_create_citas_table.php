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
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->dataTime('fecha_inicio');
            $table->dataTime('fecha_final');
            $table->time('hora_inicio');
            $table->time('hora_final');
            $table->unsignedBigInteger('estado_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('estado_id')->references('id')->on('estado_citas');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};