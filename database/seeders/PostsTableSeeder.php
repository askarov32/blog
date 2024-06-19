<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        $admin = User::where('email', 'admin@example.com')->first();
        $tech = Category::where('name', 'Tech')->first();

        Post::create([
            'title' => 'First Post',
            'body' => 'This is the body of the first post.',
            'user_id' => $admin->id,
            'category_id' => $tech->id,
            'is_published' => true,
        ]);
    }
}
