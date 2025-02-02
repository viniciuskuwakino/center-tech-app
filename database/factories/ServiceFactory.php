<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'client_name' => $this->faker->name(),
            'client_phone' => $this->faker->numberBetween(1000000000, 9999999999),
            'device' => $this->faker->name(),
            'brand' => $this->faker->name(),
            'model' => $this->faker->name(),
            'serial_number' => Str::random(10),
            'description' => $this->faker->streetAddress,
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'status' => boolval($this->faker->boolean(50))
        ];
    }
}
