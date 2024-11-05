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
        Schema::create('trabajadores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 60);
            $table->string('apellido', 60);
            $table->string('correo', 60)->unique();
            $table->date('fecha_nacimiento');
            $table->string('DNI',8)->unique();
            $table->string('contrasena', 60);
            $table->decimal('salario', 10, 2); 
            $table->string('departamento', 50);
            $table->tinyInteger('rol')->default(2);
            $table->rememberToken();
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trabajadores');
    }
};
