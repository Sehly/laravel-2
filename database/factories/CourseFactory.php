<?php

namespace Database\Factories;
use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{

     /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {

            return [
        'name'=>fake()->unique->name(),
        'description'=>fake()->unique->text(),
        'totalGrade'=>fake()->numberBetween(50, 200),
            ];
       
    }
}
