<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Ville;
use App\Models\Etudiant;

use Illuminate\Database\Eloquent\Factories\Factory;

class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>  $this->faker->name(),
            'adresse' => $this->faker-> address,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail(),
            'date_de_naissance' => $this->faker->dateTimeBetween('-50 years', '-18 years')->format('Y-m-d'),
            'ville_id' => Ville::factory(),
            'user_id' => User::factory()
        ];
    }
}
