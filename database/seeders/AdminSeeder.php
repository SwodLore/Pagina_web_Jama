<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
        $admin->email = 'admin@jamasports.com';
        $admin->fecha_nacimiento = '1999-02-02';
        $admin->DNI = '12345678';
        $admin->password = bcrypt('admin12345');
        $admin->remember_token = Str::random(10);
        $admin->save();
    }
}
