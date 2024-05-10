<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeContoller extends Controller
{
    // This method shows us home page
    public function index(){
        return view('front.home');
    }
    // This method shows us blog page
    public function blog(){

        $latestBlog = Blog::orderBy('created_at','ASC')->take(6)->get();
        

       
        return view('front.blog',compact('latestBlog'));
    }

    // This method shows us blog details
    public function blogDetail(){
        return view('front.blog_detail');
        
    }

    public function search(Request $request){
        $search = $request->search;

        $latestBlog =Blog::where(function($query) use ($search){

            $query->where('title','like',"%$search%")
            ->orWhere('author','like',"%$search%");

            })
            ->get();
            
            return view('front.blog',compact('latestBlog','search'));
    }
}
    
