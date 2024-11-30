<?php

namespace Database\Seeders;

use App\Models\Tienda;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TiendasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tienda = new Tienda();

        
        $tienda->calle = 'Prolongacion Huanuco';
        $tienda->numero = '275';
        $tienda->imagen = 'tienda1.png';
        $tienda->distrito = 'Huancayo';
        $tienda->provincia = 'Huancayo';
        $tienda->departamento = 'Junin';
        $tienda->link = 'https://maps.app.goo.gl/KZ1V6tUu6u6MudqZ8';
        $tienda->save();

        $tienda = new Tienda();

        $tienda->calle = 'Mariscal Castilla ';
        $tienda->numero = '1114';
        $tienda->imagen = 'tienda2.png';
        $tienda->distrito = 'El tambo';
        $tienda->provincia = 'Huancayo';
        $tienda->departamento = 'Huancayo';
        $tienda->link = 'https://maps.app.goo.gl/NeGGzM3W1aYFfTL3A';
        $tienda->save();

        $tienda = new Tienda();

        $tienda->calle = 'Av. 9 de Diciembre ';
        $tienda->numero = '518';
        $tienda->imagen = 'tienda3.png';
        $tienda->distrito = 'Chilca';
        $tienda->provincia = 'Huancayo';
        $tienda->departamento = 'Huancayo';
        $tienda->link = 'https://maps.app.goo.gl/fEgWiEUHxZa2xFGs6';
        $tienda->save();
    }
}
