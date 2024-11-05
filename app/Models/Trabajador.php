<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Trabajador extends Authenticatable
{
    use HasFactory, Notifiable;
    
    protected $table = 'trabajadores'; // Nombre de la tabla

    protected $fillable = [
        'nombre',
        'apellido',
        'correo',
        'fecha_nacimiento',
        'DNI',
        'contrasena',
        'salario',
        'departamento',
        'rol',
    ];

    protected $hidden = [
        'contrasena', // Ocultar la contraseña al convertir a array o JSON
        'remember_token',
    ];

    public function getAuthPassword() // Añade este método
    {
        return $this->contrasena; // Especifica el campo de la contraseña
    }
}
