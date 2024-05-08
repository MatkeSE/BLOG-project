<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeContoller extends Controller
{
    // This method shows us home page
    public function index(){
        return view('front.home');
    }
    // This method shows us blog page
    public function blog(){
        return view('front.blog');
    }
    // This method shows us blog details
    public function blogDetail(){
        return view('front.blog_detail');
    }
}
