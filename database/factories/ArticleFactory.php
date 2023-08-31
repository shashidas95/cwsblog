<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title =fake()->unique()->sentence();
        $slug = Str::slug($title);
        return [
            'title'=>$title,
            'slug'=>$slug,
            'excerpt'=>fake()->paragraphs(2,true),
            'description'=>fake()->paragraphs(10, true),
            'status'=>true,
            'user_id'=>User::inRandomOrder()->value('id'),
            'category_id'=>Category::inRandomOrder()->value('id')
        ];
    }
}
