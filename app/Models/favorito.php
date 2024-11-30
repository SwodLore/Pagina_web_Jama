<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class favorito extends Model
{
    use HasFactory;

    protected $table = 'favorito';

    protected $fillable = [
        'user_id',
        'inventario_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function inventario(){
        return $this->belongsTo(Inventario::class);
    }
}
