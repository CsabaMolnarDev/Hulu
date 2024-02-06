<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Type::factory()->create([
            'name' => 'Mobile development',
            'slug' => 'Mobiledev'
        ]);
        \App\Models\Type::factory()->create([
            'name' => 'Desktop development',
            'slug' => 'Deskdev'
        ]);
        \App\Models\Type::factory()->create([
            'name' => 'Web development',
            'slug' => 'Webdev'
        ]);
    }
}
