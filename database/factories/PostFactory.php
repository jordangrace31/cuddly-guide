<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'slug'=> $this->faker->slug,
            'surname' => $this->faker->lastName,
            'sa_id' => $this->faker->randomNumber(5),
            'mobile' => $this->faker->phoneNumber(),
            'email' => $this->faker->safeEmail(),
            'birthdate' => $this->faker->date(),
            'language' => $this->faker->languageCode,
            'interests' => $this->faker->sentence,
            'user_id' => User::factory()
        ];
    }
}
