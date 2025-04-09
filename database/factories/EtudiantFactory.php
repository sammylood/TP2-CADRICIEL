<?php

namespace Database\Factories;

use App\Models\Ville;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etudiant>
 */
class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $city = Ville::inRandomOrder()->first();

        return [
            'nom' => $this->faker->name,
            'adresse' => $this->faker->streetAddress . ', ' . $city->name, // Address includes city name
            'telephone' => $this->faker->phoneNumber, // Random phone number
            'email' => $this->faker->unique()->safeEmail, // Unique email
            'date_naissance' => $this->faker->date('Y-m-d', '2007-01-01'), // Birthday before 2005
            'ville_id' => $city->id
        ];
    }
}
