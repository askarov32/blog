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

        $posts = [
            [
                'title' => 'Work',
                'body' => 'This is the second post body content.',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRq1ibNzaZN83--bmwWByeWv6Uzbnjgbh5m_g&s',
            ],
            [
                'title' => 'Photo Editing',
                'body' => 'This is the third post body content.',
                'image' => 'https://www.doola.com/wp-content/uploads/2023/05/Vlog-vs-Blog.jpg',
            ],
            [
                'title' => 'Cooking Food',
                'body' => 'This is the fourth post body content.',
                'image' => 'https://images.immediate.co.uk/production/volatile/sites/30/2013/05/spaghetti-carbonara-382837d.jpg?resize=768,574',
            ],
            [
                'title' => 'Kids',
                'body' => 'This is the fifth post body content.',
                'image' => 'https://images.squarespace-cdn.com/content/v1/5b7c56e255b02c683659fe43/060970be-cb93-4867-9543-db9796a04020/GettyImages-671260408.jpg',
            ],
            [
                'title' => 'Sunny',
                'body' => 'This is the sixth post body content.',
                'image' => 'https://images.photowall.com/products/44323/sunny-day.jpg?h=699&q=85',
            ],
            [
                'title' => 'Luka Modric',
                'body' => 'This is the seventh post body content.',
                'image' => 'https://assets.goal.com/images/v3/blta3cb31c106ae3f47/GOAL_-_Blank_WEB_-_Facebook_(6).jpg?auto=webp&format=pjpg&width=3840&quality=60',
            ],
            [
                'title' => 'LeBron James',
                'body' => 'This is the eighth post body content.',
                'image' => 'https://people.com/thmb/IqGmTbt0QxcLBb1EYWr4S0tBFPk=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc():focal(899x0:901x2)/lebron-james-lakers-080923-3-c8983a532d894b6aada783175b6137da.jpg',
            ],
            [
                'title' => 'Bobby Fisher',
                'body' => 'This is the ninth post body content.',
                'image' => 'https://cdn.britannica.com/55/11855-050-82C30B02/Bobby-Fischer-1971.jpg',
            ],
            [
                'title' => 'Earth',
                'body' => 'This is the tenth post body content.',
                'image' => 'https://cdn.mos.cms.futurecdn.net/FaWKMJQnr2PFcYCmEyfiTm-1200-80.jpg',
            ],
            [
                'title' => 'James Webb Telescope',
                'body' => 'This is the eleventh post body content.',
                'image' => 'https://cdn.mos.cms.futurecdn.net/z8sf5yaERm5hCoeAaikmSX.jpg',
            ],
        ];

        foreach ($posts as $post) {
            Post::create(array_merge($post, [
                'user_id' => $admin->id,
                'category_id' => $tech->id,
                'is_published' => true,
            ]));
        }
    }
}
