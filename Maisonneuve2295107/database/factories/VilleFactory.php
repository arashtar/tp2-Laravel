<?php

namespace Database\Factories;
use App\Models\Ville;
use App\Models\Etudiant;

use Illuminate\Database\Eloquent\Factories\Factory;

class VilleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->city()
           
        ];
    }
}
