<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Trabajador;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(ArticuloSeeder::class);
        $this->call(TiendasTableSeeder::class);
        $this->call(AnuncioSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(TrabajadorSeeder::class);

        User::factory(100)->create();
        Admin::factory(5)->create();
        Trabajador::factory(10)->create();
    }
}
