<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->nombre = 'Alejandro';
        $user->apellido = 'Perez';
        $user->correo = 'ppovesmartinez@gmail.com';
        $user->fecha_nacimiento = '1995-01-01';
        $user->DNI = '12345678';
        $user->contrasena = bcrypt('12345678');
        $user->save();
    }
}
