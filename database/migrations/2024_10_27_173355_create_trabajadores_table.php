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
            $table->string('email', 60)->unique();
            $table->date('fecha_nacimiento');
            $table->string('DNI',8)->unique();
            $table->string('password');
            $table->decimal('salario', 10, 2); 
            $table->string('departamento', 50);
            $table->enum('rol', ['usuario', 'trabajador', 'admin'])->default('trabajador');
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
