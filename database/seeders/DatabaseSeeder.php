<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        $user1 = User::factory()->create();
        $user2 = User::factory()->create();

        $category1 = Category::factory()->create();
        $category2 = Category::factory()->create();
        $category3 = Category::factory()->create();

        Category::factory(4)->create();

        Post::factory(4)->create([
            'user_id' => $user1->id,
            'category_id' => $category1->id
        ]);
        Post::factory(2)->create([
            'user_id' => $user2->id,
            'category_id' => $category1->id
        ]);
        Post::factory(3)->create([
            'user_id' => $user1->id,
            'category_id' => $category2->id
        ]);
        Post::factory(5)->create([
            'user_id' => $user2->id,
            'category_id' => $category3->id
        ]);
    }
}
