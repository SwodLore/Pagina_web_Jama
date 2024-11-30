<?php

namespace Database\Seeders;

use App\Models\Trabajador;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrabajadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trabajador = new Trabajador();
        $trabajador->nombre = 'Alessandro';
        $trabajador->apellido = 'Poves';
        $trabajador->email = 'apovesmartinez@gmail.com';
        $trabajador->fecha_nacimiento = '2004-11-20'; //YYYY-MM-DD
        $trabajador->DNI = '74909544';
        $trabajador->password = bcrypt('12345678');
        $trabajador->salario = 1000;
        $trabajador->departamento = 'programador';
        $trabajador->save();
    }
}
