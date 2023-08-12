<?php

use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// to create new project
// =======================
// composer create-project laravel/laravel example-app
// cd example-app
// php artisan serve
// php artisan route:list
// php artisan route:list
// php artisan make:controller NewsController optional =>[--resource]
// this routs for admin

Route::get('/admin', function () {
    return "Admin route";
});

// Route::get('/profile', function () {
//     return "middleware";
// })->middleware('auth');

// Route::prefix('admin')->group(function () {
//     Route::get('/users', function () {
//         return "route prefix";
//         // Matches The "/admin/users" URL
//     });
// });

// Route::group(["prefix"=>"admin",'middleware'=>"auth"],function () {
//     Route::get('/middleware', function () {
//         return "route prefix and middleware auth";
//         // Matches The "/admin/users" URL
//     });
// });

// Route::get('/login', function () {
//     return "Must be login";
// })->name('login');

// use App\Http\Controllers\Admin\FirstController; //if you not used it
Route::group(["namespace"=>"App\Http\Controllers\Admin"],function () {
    Route::get('/controller', "FirstController@showAdminName");
    Route::get('/showString', "FirstController@showString");
    Route::get('/showString1', "FirstController@showString1");
    Route::get('/showString2', "FirstController@showString2");  // except middleware
    Route::get('/showString3', "FirstController@showString3");
});

