<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();
        
        return [
            'titre' => $this->faker->sentence,
            'contenu' => $this->faker->text($maxNbChars = 200), // Address includes city name
            'date_publication' => $this->faker->date($format = 'Y-m-d'), // Random phone number
            'user_id' => $user->id
        ];
    }
}
