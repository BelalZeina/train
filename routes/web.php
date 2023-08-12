<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// to new controller
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsController;
use Symfony\Component\HttpFoundation\Request;

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
// laravel new example-app  => to create new project laravel after install laravel
// cd example-app
// php artisan serve
// php artisan make:controller UserController ==>to make controller  [--resource]
// [composer require laravel/ui  =>to defualt auth
//  php artisan ui vue --auth    =>to defualt auth]
// npm run dev
// composer dump-autoload

// If you would like to build your front-end using the React framework,
//  then you will also need to install the @vitejs/plugin-react plugin
//  ==> npm install --save-dev @vitejs/plugin-react


// Route::get();
// Route::post(); =>to post requiset or forms page
// Route::put(); =>to update page {id}required
// Route::delete();=> to delete page {id}required


Route::get('/', function () {
    $data=[];
    return view('welcome',compact("data"));
})->middleware('auth');
Route::get('/posts', function () {
    return view('posts');
});
// route with required parameters[get request]
Route::get('test/{name}', function ($name) {
    if ($name =="belal"){
        return "Admin";
    }else{
        return "Users";
    }
});
// route with optional parameters
Route::get('test1/{name?}', function () {
    return "welcom";
})->name('test1') ; //route name
Route::get('/user/{id}/profile', function (string $id) {
    // ...
    if (isset($_GET['photos']))
    {
        return $_GET['photos']." id:".$id;
    }
})->name('profile');
// /user/1/profile?photos=yes

// request("name_parameter_request")  =>function to get the requsets from route [post or get]
//route with controller
// Route::get('info','App\Http\Controllers\UserController@showInfo'); if don't write use App\Http\Controllers\UserController;
Route::get('info',[UserController::class,'showInfo']);
// group of routes
Route::controller(UserController::class)->group(function(){
    // all route only access controller or methods in folder name Front
    Route::get('users','showUserName');
});

// resurce route [index - create - store - edit - update - delete]
Route::resource('news',NewsController::class);


// Route::get("test",function(){
//     return view("zeina")->with(["id"=>15]);
// });


// route view page
Route::get('belal/ashraf/zeina', function () {
    $arr=['belal','zeina'];
    // compact => used to enter var to veiws page
    return view('zeina',compact('arr'));
})->name('zeina'); //route name   اختصار للروت

// route with request post
Route::post('Users', function (Request $request) {
    //return view('zeina');
    return $_POST['name'];
});
// route with request get
Route::get('Users/{name}', function ($name) {
    //return view('zeina');
    if ($name =="belal"){
        return "Admin";
    }else{
        return "Users";
    }
});

Auth::routes(["verify"=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

