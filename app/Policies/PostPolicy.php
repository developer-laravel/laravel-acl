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
        return $user->id == $post->user_id;
    }

    public function postEdit(User $user, Post $post)
    {
        return $user->id == $post->user_id;
    }

    public function before(User $user)
    {
        return $user->name == 'Wagner' ;
    }
}
