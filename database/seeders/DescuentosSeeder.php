<?php

namespace Database\Seeders;

use App\Models\Descuento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DescuentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $descuento = new Descuento();
        $descuento->codigo = 'FIRST-ORDER';
        $descuento->cantidad = 10;
        $descuento->save();

        $descuento = new Descuento();
        $descuento->codigo = 'SECOND-ORDER';
        $descuento->cantidad = 15;
        $descuento->save();

        $descuento = new Descuento();
        $descuento->codigo = 'THIRD-ORDER';
        $descuento->cantidad = 20;
        $descuento->save();
    }
}
