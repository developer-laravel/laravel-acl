<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Post;

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
        //$posts = $post->all();
        $posts = $post->where('userid', auth()->user()->id)->get(); // tras os post do usuario logado
        return view('home', compact('posts'));
    }

    public function update($idpost) 
    {
        $post = Post::find($idpost);
        return view('post-update', compact('post'));
    }

}
