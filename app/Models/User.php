<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Permission;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    
    public function roles() 
    {
        // post_view => [Manager, Adm]
        return $this->belongsToMany(\App\Models\Role::class);

    }

    /**
     * Verifica as Permissiões vinculadas as funcões (roles)
     */
    public function hasPermission(Permission $permission) 
    {
        // post_view => [Manager, Admin, Editor]
        return $this->hasAnyRoles($permission->roles);
    }

    /**
     * Veririca se o usuário logado tem a permissão espeficia
     * return true ou false
     */
    public function hasAnyRoles($roles) 
    {
       
        // Wagner => Manger, Editor  | Wagner (user logado) tem a função Manager ou Editor
        if( is_array($roles) || is_object($roles) ): 
            return !! $roles->intersect($this->roles)->count();
        endif;

        return $this->roles->contains('name', $roles);
    }
}
