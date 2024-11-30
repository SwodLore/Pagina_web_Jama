<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talla extends Model
{
    use HasFactory;
    
    protected $table = 'tallas';
    protected $fillable = [
        'cm',
        'talla_us_men',
        'talla_us_women',
        'talla_eur',
    ];
    public function inventarios(){
        return $this->hasMany(Inventario::class);
    }
}
