<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class metodoPago extends Model
{
    use HasFactory;

    protected $table = 'metodoPago';

    protected $fillable = [
        'id',
        'user_id',
        'metodo_pago',
        'tipo',
        'estado',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
