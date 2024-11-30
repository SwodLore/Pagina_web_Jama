<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->firstName,
            'apellido' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'fecha_nacimiento' => $this->faker->date(),
            'DNI' => $this->faker->unique()->numerify('########'), // Generar un DNI de 8 dígitos
            'password' => bcrypt('password'), // Cambia esto según tus necesidades
            'rol' => 'admin', // Rol por defecto
        ];
    }
}
