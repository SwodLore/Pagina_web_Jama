<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trabajador>
 */
class TrabajadorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $departamentos = ['ventas', 'cajero', 'seguridad', 'marketing'];

        return [
            'nombre' => $this->faker->firstName,
            'apellido' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'fecha_nacimiento' => $this->faker->date(),
            'DNI' => $this->faker->unique()->numerify('########'), // Generar un DNI de 8 dígitos
            'password' => bcrypt('password'), // Cambia esto según tus necesidades
            'salario' => $this->faker->randomFloat(2, 1000, 10000), // Salario aleatorio entre 1000 y 10000
            'departamento' => $this->faker->randomElement($departamentos), 
            'rol' => 2, 
        ];
    }
}
