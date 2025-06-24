<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraphs(3, true),
            'slug' => $this->faker->slug,
            'publication_date' => $this->faker->dateTimeThisYear,
            'last_modified_date' => now(),
            'status' => 'P',
            'featured_image_url' => $this->faker->imageUrl(),
            'views_count' => $this->faker->numberBetween(0, 1000),
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
        ];
    }
}
