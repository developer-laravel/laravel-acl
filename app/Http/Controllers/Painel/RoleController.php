<?php

namespace App\Http\Controllers\Painel;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Role;
use Gate;

class RoleController extends Controller
{
    private $role;

    public function __construct(Role $role)
    {
        $this->middleware('auth');
        
        $this->role = $role;

        if( Gate::denies('adm') )
            abort(403, 'Not permission');
    }

    public function index()
    {
        $roles = $this->role->all();
        return view('painel.roles.index', compact('roles'));
    }

    public function edit($id)
    {
        $role = $this->role->find($id);
        $this->checkAuthorized('role_edit', $role);
        dd($role);
        // return view('painel.roles.index', compact('roles'));
    }

    public function delete($id)
    {
        $role = $this->role->find($id);
        $this->checkAuthorized('role_edit', $role);
        // return view('painel.roles.index', compact('roles'));
    }

    public function permissions($id)
    {
        $role = $this->role->find($id);
        // $this->checkAuthorized('role_edit', $role);

        $permissions = $role->permissions()->get();
        return view('painel.roles.permissions', compact('role', 'permissions'));
    }

    private function checkAuthorized($permission, $role) {
        if( Gate::denies('role_edit', $role) ):
            abort(403, 'Unauthorized');
        endif;
    }
}
