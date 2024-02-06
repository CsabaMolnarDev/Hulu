<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Course::factory(3)->create([
            'type_id' => rand(1,3)
        ]);
        \App\Models\Course::factory()->create([
            'name' => 'Php basics',
            'description' => 'Learn the basics of php',
            'level' => 'Beginer',
            'c_route' => 'Database/factories, Database/migrations, Database/seeders',
            'type_id' => rand(1,3)
        ]);
        \App\Models\Course::factory()->create([
            'name' => 'Php advanced',
            'description' => 'Learn the most important parts of php',
            'level' => 'Intermediat',
            'c_route' => 'Database/migrations, ',
            'type_id' => rand(1,3)
        ]);
        \App\Models\Course::factory()->create([
            'name' => 'Php professional',
            'description' => 'Learn php to its core',
            'level' => 'Professional',
            'c_route' => 'Database/seeders',
            'type_id' => rand(1,3)
        ]);
    }
}
