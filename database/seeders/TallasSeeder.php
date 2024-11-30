<?php

namespace Database\Seeders;

use App\Models\Talla;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TallasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tallas = new Talla();
        $tallas -> cm = 22.5;
        $tallas->talla_us_men = 4.5;
        $tallas->talla_us_women = 5.5;
        $tallas->talla_eur = 36.5;
        $tallas->save();

        $tallas = new Talla();
        $tallas -> cm = 22.9;
        $tallas->talla_us_men = 5;
        $tallas->talla_us_women = 6;
        $tallas->talla_eur = 37.5;
        $tallas->save();

        $tallas = new Talla();
        $tallas -> cm = 23.3;
        $tallas->talla_us_men = 5.5;
        $tallas->talla_us_women = 6.5;
        $tallas->talla_eur = 38;
        $tallas->save();

        $tallas = new Talla();
        $tallas -> cm = 23.8;
        $tallas->talla_us_men = 6;
        $tallas->talla_us_women = 7;
        $tallas->talla_eur = 38.5;
        $tallas->save();

        $tallas = new Talla();
        $tallas -> cm = 24.2;
        $tallas->talla_us_men = 6.5;
        $tallas->talla_us_women = 7.5;
        $tallas->talla_eur = 39.5;
        $tallas->save();

        $tallas = new Talla();
        $tallas -> cm = 24.6;
        $tallas->talla_us_men = 7;
        $tallas->talla_us_women = 8;
        $tallas->talla_eur = 40;
        $tallas->save();

        $tallas = new Talla();
        $tallas -> cm = 25;
        $tallas->talla_us_men = 7.5;
        $tallas->talla_us_women = 8.5;
        $tallas->talla_eur = 40.5;
        $tallas->save();

        $tallas = new Talla();
        $tallas -> cm = 25.5;
        $tallas->talla_us_men = 8;
        $tallas->talla_us_women = 9;
        $tallas->talla_eur = 41.5;
        $tallas->save();

        $tallas = new Talla();
        $tallas -> cm = 25.9;
        $tallas->talla_us_men = 8.5;
        $tallas->talla_us_women = 9.5;
        $tallas->talla_eur = 42;
        $tallas->save();

        $tallas = new Talla();
        $tallas -> cm = 26.3;
        $tallas->talla_us_men = 9;
        $tallas->talla_us_women = 10;
        $tallas->talla_eur = 42.5;
        $tallas->save();

        $tallas = new Talla();
        $tallas -> cm = 26.7;
        $tallas->talla_us_men = 9.5;
        $tallas->talla_us_women = 10.5;
        $tallas->talla_eur = 43.5;
        $tallas->save();

        $tallas = new Talla();
        $tallas -> cm = 27.1;
        $tallas->talla_us_men = 10;
        $tallas->talla_us_women = 11;
        $tallas->talla_eur = 44;
        $tallas->save();

        $tallas = new Talla();
        $tallas -> cm = 27.6;
        $tallas->talla_us_men = 10.5;
        $tallas->talla_us_women = 11.5;
        $tallas->talla_eur = 44.5;
        $tallas->save();

        $tallas = new Talla();
        $tallas -> cm = 28;
        $tallas->talla_us_men = 11;
        $tallas->talla_us_women = 12;
        $tallas->talla_eur = 45.5;
        $tallas->save();

        $tallas = new Talla();
        $tallas -> cm = 28.4;
        $tallas->talla_us_men = 11.5;
        $tallas->talla_us_women = 12.5;
        $tallas->talla_eur = 46;
        $tallas->save();
    }
}
