<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // $users = DB::table('users')->get();
    // return view('user.list', ['users'=>$users]);
    return view('home.admin');
});

Route::get('/check_fail', function (){
    echo "check_fail page";
    return view('home.admin'); //không được
});
Route::get('check_age/{age?}', function ($age) {
    echo $age;
    $users = DB::table('users')->get();
    return view('user.list', ['users'=>$users]); //được
})->middleware(\App\Http\Middleware\CheckAge::class);

Route::resource('users', UserController::class)->middleware(['auth','role:admin']);

Route::resource('products', ProductController::class)->middleware(['auth','role:editor']);
Route::resource('profiles', ProfileController::class)->middleware(['auth','role:admin']);
Route::resource('articles', ArticleController::class)->middleware(['auth','role:editor']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
