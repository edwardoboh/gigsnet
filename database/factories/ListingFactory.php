<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4),
            'tags' => "Frontend, Backend, Fullstack",
            'email' => $this->faker->email(),
            'location' => $this->faker->city(),
            'website' => $this->faker->url(),
            'description' => $this->faker->sentence(30),
            'company' => $this->faker->company()
        ];
    }
}
