<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class direcciones extends Model
{
    use HasFactory;

    protected $table = 'direcciones';

    protected $fillable = [
        'id',
        'user_id',
        'Nombre',
        'direccion',
        'referencia',
        'departamento',
        'provincia',
        'distrito',
        'codigo_postal',
        'telefono',
        'pais',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
