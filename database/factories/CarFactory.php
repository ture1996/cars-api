<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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

        $engines = [
            "diesel", "hybrid", "electric", "gasoline"
        ];

        return [

            'brand' => fake()->text(20),
            'model' => fake()->text(15),
            'year' => fake()->date(),
            'max_speed' => fake()->numberBetween(20,300),
            'is_automatic' => fake()->boolean() ? true : false,
            'engine' => Arr::random($engines,1)[0],
            'number_of_doors' => fake()->numberBetween(2,5)
        ];
    }
}
