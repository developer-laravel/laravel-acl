<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Gate;

class PostController extends Controller
{
    private $post;

    public function __construct(Post $post)
    {
        $this->middleware('auth');

        // if( Gate::denies('post_view') )
        //     return redirect()->back();

        $this->post = $post;
    }

    public function index()
    {     
        $posts = $this->post->all();
        
        if( Gate::denies('post_view') )
            //return redirect()->back();
            abort(403, 'Not permission List posts');

        return view('painel.posts.index', compact('posts'));
    }

    public function edit($postid)
    {
        $post = $this->post->find($postid);
        $this->checkAuthorized('post_edit', $post);
        dd($post);
        // return view('painel.posts.index', compact('posts'));
    }

    public function delete($postid)
    {
        $post = $this->post->find($postid);
        $this->checkAuthorized('post_edit', $post);
        // return view('painel.posts.index', compact('posts'));
    }

    private function checkAuthorized($permission, $post) {
        if( Gate::denies('post_edit', $post) ):
            abort(403, 'Unauthorized');
        endif;
    }
}

