<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Permission;
use Gate;


class PermissionController extends Controller
{
    private $permission;

    public function __construct(Permission $permission)
    {
        $this->middleware('auth');
        $this->permission = $permission;
    }

    public function index()
    {
        $permissions = $this->permission->all();
        return view('painel.permissions.index', compact('permissions'));
    }

    public function roles($id)
    {
        $permission = $this->permission->find($id);

        $roles = $permission->roles()->get();
        return view('painel.permissions.roles', compact('permission', 'roles'));
    }

    public function edit($id)
    {
        $post = $this->post->find($id);
        $this->checkAuthorized('permission_edit', $post);
        dd($post);
        // return view('painel.posts.index', compact('posts'));
    }

    public function delete($id)
    {
        $perm = $this->post->find($id);
        $this->checkAuthorized('permission_delete', $perm);
        // return view('painel.posts.index', compact('posts'));
    }

    private function checkAuthorized($permission, $param) {
        if( Gate::denies($permission, $param) ):
            abort(403, 'Unauthorized');
        endif;
    }
}
