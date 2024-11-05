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
            $table->id('producto_id'); 
            $table->string('nombre', 60); 
            $table->string('marca', 50);
            $table->string('codigo', 20)->unique(); 
            $table->string('imagen', 200);
            $table->string('color', 50); 
            $table->decimal('precio', 10, 2); 
            $table->decimal('talla', 10, 1);
            $table->text('descripcion');
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
