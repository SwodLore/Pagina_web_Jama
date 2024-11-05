<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = new Admin();
        $admin->nombre = 'Alejandro';
        $admin->apellido = 'Perez';
        $admin->correo = 'admin@jamasports.com';
        $admin->fecha_nacimiento = '1999-02-02';
        $admin->DNI = '12345670';
        $admin->contrasena = bcrypt('admin');
        $admin->save();
    }
}
