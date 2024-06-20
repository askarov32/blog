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
            'title' => 'Toyota Supra Post',
            'body' => 'Very good car the supra itself.',
            'user_id' => $admin->id,
            'category_id' => $tech->id,
            'is_published' => true,
            'image' => 'https://di-uploads-pod16.dealerinspire.com/toyotaofnorthcharlotte/uploads/2019/01/N-Charlotte-Toyota-sports-car.jpeg',
        ]);
    }
}