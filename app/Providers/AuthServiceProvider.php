<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        // \App\Models\Post::class => \App\Policies\PostPolicy::class,
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);
         
        $permissions = \App\Models\Permission::with('roles')->get();
        // post_view => Manager, Editor
        // post_delete => Manager
        // post_edit => Manager


        foreach( $permissions as $permission ):
            $gate->define($permission->name, function(User $user) use ($permission){
                // echo $permission->name . "<br/>";
                return $user->hasPermission($permission);
            });
        endforeach;
    }
}
