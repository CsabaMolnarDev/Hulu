<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            SchoolSeeder::class,
            RoleSeeder::class,
            TypeSeeder::class,
            CourseSeeder::class,
            ]);
         \App\Models\User::factory(10)->create([
            'school_id' => 1,
            'roles_id' => 3
         ]);
         \App\Models\User::factory(10)->create([
            'school_id' => 2,
            'roles_id' => 3
         ]);
         \App\Models\User::factory(10)->create([
            'school_id' => 3,
            'roles_id' => 3
         ]);

         \App\Models\User::factory()->create([
             'username' => 'Dev1',
             'email' => 'test@example.com',
             'school_id' => 3,
             'roles_id' => 1
         ]);
         \App\Models\User::factory()->create([
            'username' => 'Dev2',
            'email' => 'test1@example.com',
            'school_id' => 3,
            'roles_id' => 1
        ]);
        \App\Models\User::factory()->create([
            'username' => 'Dev3',
            'email' => 'test2@example.com',
            'school_id' => 3,
            'roles_id' => 1
        ]);
    }
}
