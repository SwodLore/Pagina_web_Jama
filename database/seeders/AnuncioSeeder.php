<?php

namespace Database\Seeders;

use App\Models\Anuncio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnuncioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $anuncio = new Anuncio();

        $anuncio->nombre = 'Anuncio 1';
        $anuncio->imagen = 'Anuncio.webp';
        $anuncio->save();

        $anuncio = new Anuncio();

        $anuncio->nombre = 'Anuncio 2';
        $anuncio->imagen = 'Anuncio2.png';
        $anuncio->save();

        $anuncio = new Anuncio();

        $anuncio->nombre = 'Anuncio 3';
        $anuncio->imagen = 'Anuncio3.jpg';
        $anuncio->save();
    }
}
