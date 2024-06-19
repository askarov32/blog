<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $adminRole = Role::where('name', 'admin')->first();
        $moderatorRole = Role::where('name', 'moderator')->first();

        $admin = User::create([
            'name' => 'Admin Adminovich',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);
        $admin->roles()->attach($adminRole);

        $moderator = User::create([
            'name' => 'Moderator Moderatovich',
            'email' => 'moderator@example.com',
            'password' => Hash::make('password'),
        ]);
        $moderator->roles()->attach($moderatorRole);
    }
}
