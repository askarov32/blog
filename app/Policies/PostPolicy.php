<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any posts.
     */
    public function viewAny(User $user)
    {
        return $user->hasRole('admin') || $user->hasRole('moderator');
    }

    /**
     * Determine whether the user can view the post.
     */
    public function view(User $user, Post $post)
    {
        return $user->hasRole('admin') || $user->hasRole('moderator');
    }

    /**
     * Determine whether the user can create posts.
     */
    public function create(User $user)
    {
        return $user->hasRole('admin');
    }

    /**
     * Determine whether the user can update the post.
     */
    public function update(User $user, Post $post)
    {
        return $user->hasRole('moderator');
    }

    /**
     * Determine whether the user can delete the post.
     */
    public function delete(User $user, Post $post)
    {
        return $user->hasRole('admin');
    }

    /**
     * Determine whether the user can restore the post.
     */
    public function restore(User $user, Post $post)
    {
        return $user->hasRole('admin');
    }

    /**
     * Determine whether the user can permanently delete the post.
     */
    public function forceDelete(User $user, Post $post)
    {
        return $user->hasRole('admin');
    }
}