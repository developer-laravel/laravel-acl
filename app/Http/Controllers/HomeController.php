<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Post;
use Gate;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $post)
    {
        $posts = $post->all();
        //$posts = $post->where('userid', auth()->user()->id)->get(); // tras os post do usuario logado
        //dd($posts);
        // echo "<pre>";
        // print_r($posts);
        // echo "</pre>";
        return view('home', compact('posts'));
    }

    public function update($idpost) 
    {
        $post = Post::find($idpost);

        /** Acl */
        // $this->authorize('udpate-post', $post);

        if( Gate::denies('post_edit', $post) ):
            abort(403, 'Unauthorized');
        endif;

        return view('post-update', compact('post'));
    }

    public function rolesPermissions() {
        $name = auth()->user()->name;
        echo("<h2> {$name} </h2>");

        foreach( auth()->user()->roles as $role ):
            echo   " <b>$role->name</b>  ==> ";
            $permissions = $role->permissions;
            foreach(  $permissions as $p ):
                echo $p->name . ", ";
            endforeach;
            echo "<hr/>";
        endforeach;

    }

}
