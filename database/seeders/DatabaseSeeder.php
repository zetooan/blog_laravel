<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        Category::create([
            'name' => 'Blog',
            'slug' => 'blog'
        ]);
        Category::create([
            'name' => 'Inf',
            'slug' => 'inf'
        ]);

        Post::factory(100)->create();
    }
}
