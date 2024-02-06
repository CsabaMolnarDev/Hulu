<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Role::create([
            "name"=> "Developer",
            "slug"=> "dev"
        ]);
        \App\Models\Role::create([
            "name"=> "Premium",
            "slug"=> "pro"
        ]);
        \App\Models\Role::create([
            "name"=> "Basic",
            "slug"=> "basic"
        ]);
    }
}
