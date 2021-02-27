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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');


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