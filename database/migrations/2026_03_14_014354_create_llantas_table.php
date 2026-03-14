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
        Schema::create('llantas', function (Blueprint $table) {
    $table->id();
    $table->string('cliente');
    $table->string(`telefono`);
    $table->string('tipo_llanta');
    $table->string('estado');
    $table->decimal('precio',8,2);
    $table->date('fecha_ingreso');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('llantas');
    }
};
