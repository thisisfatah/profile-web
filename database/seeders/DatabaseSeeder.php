<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'fatah',
            'email' => 'mfatahil56@gmail.com',
            'password' => bcrypt('123')
        ]);

        Category::create([
            'name' => 'programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'web design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();
    }
}
