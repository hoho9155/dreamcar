<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'make' => fake()->randomElement([
                'Abarth Car',
                'AC Car',
                'AIXAM Car',
                'Alfa Romeo Car',
            ]),
            'price' => fake()->numberBetween(5, 20) * 1000,
            'model' => 'Abarth 3234',
            'year'  => fake()->numberBetween(1, 20),
            'mileage' => fake()->numberBetween(100, 1000) * 100,
            'fuel'  => fake()->numberBetween(50, 100),
            'condition' => 'This car\'s condition is here',
            'image' => fake()->imageUrl($width = 200, $height = 200),
        ];
    }
}
