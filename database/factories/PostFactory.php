<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'title' => $this->faker->sentence(4),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->sentence(),
            'content' => $this->faker->text(),
            'published_at' => $this->faker->dateTimeBetween('-3 months')
        ];
    }
}
