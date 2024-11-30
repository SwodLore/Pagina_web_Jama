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
        Schema::create('productos', function (Blueprint $table) {
            $table->id(); 
            $table->string('nombre', 60);
            $table->foreignId('marca_id')->constrained('marcas')->onDelete('cascade');
            $table->string('codigo', 20);
            $table->string('imagen', 200)->nullable();
            $table->string('color', 50);
            $table->decimal('precio', 10, 2);
            $table->text('descripcion')->nullable();
            $table->char('genero', 1)->default('M');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
