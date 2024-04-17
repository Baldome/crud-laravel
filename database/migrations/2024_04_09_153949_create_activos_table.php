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
        Schema::create('activos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique();
            $table->string('nombre');
            $table->text('descripcion')->nullable();
            $table->string('estado');
            $table->date('fecha_registro');
            $table->string('modelo')->nullable();
            $table->string('serie')->nullable();
            $table->string('imagen')->nullable();
            $table->text('observaciones')->nullable();
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('ubicacion_id');
            $table->timestamps();
            
            $table->foreign('categoria_id')->references('id')->on('categorias')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('ubicacion_id')->references('id')->on('ubicaciones')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activos');
    }
};
