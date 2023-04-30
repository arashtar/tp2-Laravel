<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class RepertoireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'title_fr' => $this->faker->sentence(4),
            'user_id' => User::factory(),
            'file_path' => $this->faker->randomElement(['document1.pdf', 'document2.zip', 'document3.doc']),
        ];
    }
}
