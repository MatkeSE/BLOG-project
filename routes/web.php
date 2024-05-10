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
    Route::get('/account/create-blog',[AdminController::class,'createBlog'])->name('account.createBlog');
    Route::post('/account/save-blog',[AdminController::class,'saveBlog'])->name('account.saveBlog');
    Route::get('/account/{blog}/edit-blog',[AdminController::class,'editBlog'])->name('account.editBlog');
    Route::put('/account/{blog}',[AdminController::class,'update'])->name('account.update');
    Route::delete('/account/profile/{blog}',[AdminController::class,'deleteBlog'])->name('account.deleteBlog');
  


});