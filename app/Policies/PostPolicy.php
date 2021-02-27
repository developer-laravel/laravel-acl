<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\User;
use App\Models\Post;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function updatePost(User $user, Post $post)
    {
        // $gate->define('update-post', function(User $user, Post $post) {
        //     return $user->id == $post->userid;
        // });

        return $user->id == $post->userid;
    }
}
