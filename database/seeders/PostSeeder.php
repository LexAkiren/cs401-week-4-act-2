<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        // Make sure there's at least one user
        $userId = User::first()?->id ?? User::factory()->create()->id;

        // Manually insert a category and get its ID
        $categoryId = DB::table('categories')->insertGetId([
            'category_name' => 'General',
            'slug' => 'general',
            'description' => 'Default seeded category',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Create 10 posts with existing PostFactory
        Post::factory()->count(10)->create([
            'user_id' => $userId,
            'category_id' => $categoryId,
        ]);
    }
}
