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

    public function postView(User $user, Post $post)
    {
        // $gate->define('update-post', function(User $user, Post $post) {
        //     return $user->id == $post->userid;
        // });

        return $user->id == $post->user_id;
    }


    public function postEdit(User $user, Post $post)
    {
        // $gate->define('update-post', function(User $user, Post $post) {
        //     return $user->id == $post->userid;
        // });

        return $user->id == $post->user_id;
    }
}
