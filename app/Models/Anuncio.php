<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    protected $table = 'anuncios';
    protected $anuncio = ['nombre', 'imagen'];
}
