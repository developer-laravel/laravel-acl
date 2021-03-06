<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use Gate;

class UserController extends Controller
{
    private $user;
    
    public function __construct(User $user)
    {
        $this->user = $user;

        // if( Gate::denies('user_view') ):
        //     return redirect()->back();
        // endif;
        
        if( Gate::denies('user_view') )
            //return redirect()->back();
            abort(403, 'Not permission List Users');
        
    }
    
    public function index()
    {
        $users = $this->user->all();
        
        // if( Gate::denies('user_view') ):
        //     return redirect()->back();
        // endif;

        return view('painel.users.index', compact('users'));
    }
    
    
    public function roles($id)
    {
        //Recupera o usuário
        $user = $this->user->find($id);
        
        //recuperar roles
        $roles = $user->roles()->get();
        
        return view('painel.users.roles', compact('user', 'roles'));
    }
    
    public function edit($id)
    {
        if( Gate::denies('edit-user') ) 
            return redirect()->back();
        
        //Show form
    }
    
    public function update($id)
    {
        if( Gate::denies('edit-user') ) 
            return redirect()->back();
    }

    private function checkAuthorized($permission, $post) {
        if( Gate::denies('post_edit', $post) ):
            return redirect()->back();
        endif;
    }
}
