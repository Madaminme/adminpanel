<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->company(),
            'slug' => $this->faker->slug(),
            'address' => $this->faker->country(),
            'email' => $this->faker->safeEmail(),
            'website' => $this->faker->domainName(),
        ];
    }
}
