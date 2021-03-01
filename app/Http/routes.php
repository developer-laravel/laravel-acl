<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


// function RegisterResourceRoute($route, $name) {
//     Route::get($route,              'Api\\'.$name.'Controller@index');
//     Route::get($route.'/{id}',      'Api\\'.$name.'Controller@get');
//     Route::post($route,             'Api\\'.$name.'Controller@post');
//     Route::put($route.'/{id}',      'Api\\'.$name.'Controller@put');
//     Route::delete($route.'/{id}',   'Api\\'.$name.'Controller@delete');
// }

// Route::get('/', function () {
//     return view('welcome');
// });

Route::auth();

Route::get('/', 'Portal\SiteController@index');

Route::get('/home', 'HomeController@index');

Route::get('/home/post/{id}/update', 'HomeController@update');

Route::get('/home/roles-permissions', 'HomeController@rolesPermissions');

// PAINEL 
Route::group(['prefix' => 'painel'], function() {
    // PainelController
    Route::get('/', 'Painel\PainelController@index');

    // PostController
    Route::get('/posts', 'Painel\PostController@index');
    Route::get('/post/{id}/edit', 'Painel\PostController@edit');
    Route::get('/post/{id}/delete', 'Painel\PostController@delete');

    // PermissionController
    Route::get('/permissions', 'Painel\PermissionController@index');
    Route::get('/permission/{id}/roles', 'Painel\PermissionController@roles');

    // RoleController
    Route::get('/roles', 'Painel\RoleController@index');
    Route::get('/role/{id}/permissions', 'Painel\RoleController@permissions');

    // UserController
    Route::get('users', 'Painel\UserController@index');
    Route::get('user/{id}/roles', 'Painel\UserController@roles');
});



/**
 * https://stackoverflow.com/questions/45654535/laravel-5-2-to-5-3-converting-routes-php-to-web-and-api-route-files
 * Laravel 5.2 to 5.3 - converting routes.php to web and api route files?
 */

// Route::group(['middleware' => ['api', 'auth']], function () {
//     Route::group(array('prefix' => 'api'), function() {
//         RegisterResourceRoute('file', 'File');
//         RegisterResourceRoute('photo', 'Photo');
//     });
//     Route::post('/api/email', 'Api\\EmailController@send');

// });


// Route::group(['middleware' => ['api', 'auth']], function () {
//     Route::get('api/users', 'Api\\UserController@index')->name('user.index');
// });

Route::get('api/users', 'Api\\UserController@index')->name('user.index');