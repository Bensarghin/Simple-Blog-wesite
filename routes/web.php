<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Backoffice\UsersManageController;
use App\Http\Controllers\Frontoffice\BlogsController;
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
    return view('auth.login');
});
Route::namespace('backoffice')->group(function(){
    
    Route::get('/users', [UsersManageController::class,'index'])->name('users');
    Route::delete('/delete/{id}', [UsersManageController::class,'deleteUser'])->name('delete');
    Route::get('/user/{id}', [UsersManageController::class,'updateUser'])->name('getUser');
    Route::post('/user', [UsersManageController::class,'updateUser'])->name('user.update');
});
Route::namespace('frontoffice')->group(function(){
    
    Route::get('/blogs', [BlogsController::class,'index'])->name('blogs');
    Route::get('/writeblogs', [BlogsController::class,'addBlog'])->name('blog.add');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
