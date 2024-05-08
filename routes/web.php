<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeContoller;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeContoller::class,'index'])->name('home');
Route::get('/blog',[HomeContoller::class,'blog'])->name('blog');
Route::get('/blog_detail',[HomeContoller::class,'blogDetail'])->name('blog_detail');





Route::group(['middleware' => 'guest'], function(){
    Route::get('/account/register',[AdminController::class,'registration'])->name('account.registration');
    Route::post('/account/process-register',[AdminController::class,'processRegistration'])->name('account.processRegistration');
    Route::get('/account/login',[AdminController::class,'login'])->name('account.login');
    Route::post('/account/authenticate',[AdminController::class,'authenticate'])->name('account.authenticate');
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('/account/profile',[AdminController::class,'profile'])->name('account.profile');
    Route::get('/account/logout',[AdminController::class,'logout'])->name('account.logout');

});