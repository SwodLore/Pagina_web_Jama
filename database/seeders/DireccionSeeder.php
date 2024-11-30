<?php

namespace Database\Seeders;

use App\Models\direcciones;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DireccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $direccion = new direcciones();
        $direccion->user_id = 1;
        $direccion->Nombre = 'Eda Norma Martinez Lopez';
        $direccion->direccion = 'Psj.Cristobal 139';
        $direccion->referencia = 'Cerca al parque';
        $direccion->departamento = 'Junín';
        $direccion->provincia = 'Huancayo';
        $direccion->distrito = 'Chilca';
        $direccion->codigo_postal = '12345';
        $direccion->telefono = '995140564';
        $direccion->pais = 'Perú';
        $direccion->save();
    }
}
