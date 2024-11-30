<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'productos';

    protected $fillable = [
        'nombre',
        'marca_id',
        'codigo',
        'imagen',
        'color',
        'precio',
        'descripcion',
        'genero',
    ];

    public function favoritos(){
        return $this->hasMany(favorito::class);
    }

    public function carritos(){
        return $this->hasMany(carrito::class);
    }
    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }
    public function inventarios()
    {
        return $this->hasMany(Inventario::class, 'producto_id', 'id');
    }
}
