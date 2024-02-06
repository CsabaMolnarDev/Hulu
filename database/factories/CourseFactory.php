<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $array = ['Beginer','Intermediate', 'Professional'];
        $array2 = ['resources/view', 'resources/css', 'resources/js'];
        return [
            'name' => fake()->name(),
            'description' => fake()->sentence(),
            'level' => $array[rand(0,2)],
            'c_route' => $array2[rand(0,2)]
        ];
    }
}
