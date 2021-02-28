<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use App\Models\Post;

class PainelController extends Controller
{
    public function index()
    
    {
        $tot = (object) array(
            'users' => User::count(),
            'roles' => Role::count(),
            'permissions' => Permission::count(),
            'posts' => Post::count(),
        );

        return view('painel.home.index', compact('tot'));
    }
}
