<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'name' => fake()->userName(),
            // 'email' => fake()->unique()->email(),
            // 'password' => fake()->password(),
            // 'first_name' => fake()->firstName(),
            // 'last_name' => fake()->lastName(),
            // 'img' => fake()->imageUrl(250,250),
            // 'words' => fake()->words(3, true),
            // 'is_active' => fake()->boolean(),
            // 'sentence' => fake()->sentence(),
            // 'paragraph' => fake()->paragraph(),
            // 'human_word' => fake()->word(),///
            // 'non_human_word' => fake()->word(),///
            // 'num_of_times' => fake()->numberBetween(1, 100),
            // 'this_year' => fake()->dateTimeThisYear(),
            // 'emoji' => fake()->emoji(),

            'task_name' => fake()->unique()->sentence(),
        ];
    }
}
