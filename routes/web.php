<?php

use App\Http\Controllers\HomeContoller;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeContoller::class,'index'])->name('home');
Route::get('/blog',[HomeContoller::class,'blog'])->name('blog');
Route::get('/blog_detail',[HomeContoller::class,'blogDetail'])->name('blog_detail');
