<?php

namespace Database\Seeders;

use App\Models\Marca;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarcasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $marca = new Marca();
        $marca->nombre = 'Adidas';
        $marca->descuento = 20;
        $marca->save();

        $marca = new Marca();
        $marca->nombre = 'Nike';
        $marca->descuento = 10;
        $marca->save();

        $marca = new Marca();
        $marca->nombre = 'Puma';
        $marca->descuento = 15;
        $marca->save();

        $marca = new Marca();
        $marca->nombre = 'Reebok';
        $marca->descuento = 18;
        $marca->save();

        $marca = new Marca();
        $marca->nombre = 'CAT';
        $marca->descuento = 5;
        $marca->save();

        $marca = new Marca();
        $marca->nombre = 'Jordan';
        $marca->descuento = 8;
        $marca->save();

        $marca = new Marca();
        $marca->nombre = 'Under Armour';
        $marca->descuento = 12;
        $marca->save();

        $marca = new Marca();
        $marca->nombre = 'New Balance';
        $marca->descuento = 5;
        $marca->save();
    }
}
