<?php

namespace Database\Factories;
use App\Models\Track;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class TrackFactory extends Factory
{

     /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {

            return [
        'name'=>fake()->unique->name(),
        'hours'=>fake()->numberBetween(10, 50),
        'startDate'=>fake()->date(),
            ];
       
    }
}
