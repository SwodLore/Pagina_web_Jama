<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    protected $table = 'tiendas';
    protected $tienda = ['calle', 'numero', 'imagen', 'distrito', 'provincia', 'departamento', 'link'];
}
