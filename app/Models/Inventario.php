<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;
    
    protected $table = 'inventario';
    protected $fillable = [
        'producto_id',
        'talla_id',
        'cantidad',
    ];

    public function producto(){
        return $this->belongsTo(Articulo::class, 'producto_id', 'id');
    }

    public function talla(){
        return $this->belongsTo(Talla::class, 'talla_id', 'id');
    }
    public function carrito()
    {
        return $this->hasMany(Carrito::class);
    }
}
