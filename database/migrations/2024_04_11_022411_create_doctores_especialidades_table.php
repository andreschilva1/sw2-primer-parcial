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
        Schema::create('doctores_especialidades', function (Blueprint $table) {
            
            $table->foreignId('doctores_id')->from('doctores')->constrained()->onDelete('cascade');
            $table->foreignId('especialidades_id')->from('especialidades')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctores_especialidades');
    }
};
