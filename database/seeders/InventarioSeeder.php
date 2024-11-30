<?php

namespace Database\Seeders;

use App\Models\Inventario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $inventario = new Inventario();
        $inventario->producto_id = 1;
        $inventario->talla_id = 4;
        $inventario->cantidad = 5;
        $inventario->save();

        $inventario = new Inventario();
        $inventario->producto_id = 2;
        $inventario->talla_id = 7;
        $inventario->cantidad = 1;
        $inventario->save();

        $inventario = new Inventario();
        $inventario->producto_id = 3;
        $inventario->talla_id = 12;
        $inventario->cantidad = 2;
        $inventario->save();

        $inventario = new Inventario();
        $inventario->producto_id = 4;
        $inventario->talla_id = 10;
        $inventario->cantidad = 3;
        $inventario->save();

        $inventario = new Inventario();
        $inventario->producto_id = 5;
        $inventario->talla_id = 6;
        $inventario->cantidad = 3;
        $inventario->save();

        $inventario = new Inventario();
        $inventario->producto_id = 1;
        $inventario->talla_id = 6;
        $inventario->cantidad = 5;
        $inventario->save();

        $inventario = new Inventario();
        $inventario->producto_id = 2;
        $inventario->talla_id = 7;
        $inventario->cantidad = 1;
        $inventario->save();

        $inventario = new Inventario();
        $inventario->producto_id = 3;
        $inventario->talla_id = 7;
        $inventario->cantidad = 2;
        $inventario->save();

        $inventario = new Inventario();
        $inventario->producto_id = 5;
        $inventario->talla_id = 10;
        $inventario->cantidad = 3;
        $inventario->save();

        $inventario = new Inventario();
        $inventario->producto_id = 5;
        $inventario->talla_id = 9;
        $inventario->cantidad = 3;
        $inventario->save();
    }
}
