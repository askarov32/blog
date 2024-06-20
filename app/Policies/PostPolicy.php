<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    public function before(User $user, $ability)
    {
        if ($user->hasRole('admin')) {
            return true;
        }
    }

    public function viewAny(User $user)
    {
        return $user->hasAnyRole(['admin', 'moderator']);
    }

    public function view(User $user, Post $post)
    {
        return $user->hasAnyRole(['admin', 'moderator']);
    }

    public function create(User $user)
    {
        return $user->hasRole('admin');
    }

    public function update(User $user, Post $post)
    {
        return $user->hasAnyRole(['moderator']);
    }

    public function delete(User $user, Post $post)
    {
        return $user->hasRole('admin');
    }
}