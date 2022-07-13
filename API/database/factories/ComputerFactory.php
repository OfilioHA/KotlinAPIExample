<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Computer>
 */
class ComputerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'model' => $this->faker->word(),
            'price' => $this->faker->numberBetween(1,1200),
            'brand_id' => $this->faker->numberBetween(1, 4),
            'type_id' => $this->faker->numberBetween(1,2),
            'user_id' => 1
        ];
    }
}
