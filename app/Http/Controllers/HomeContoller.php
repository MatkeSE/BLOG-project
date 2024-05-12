<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
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

        $tags = Tag::get();

        $categories = Category::get();

        $popularBlog = Blog::where('isPopular',"1")->take(3)->get();

       
        return view('front.blog',compact('latestBlog', 'tags','categories','popularBlog'));
    }

    // This method shows us blog details
    public function blogDetail(){
        return view('front.blog_detail');
        
    }
    // This method performs search
    public function search(Request $request){
        $search = $request->search;

        $latestBlog =Blog::where(function($query) use ($search){

            $query->where('title','like',"%$search%")
            ->orWhere('author','like',"%$search%");

            })
            ->get();
        $tags = Tag::get();

        $categories = Category::get();
        $popularBlog = Blog::where('isPopular',"1")->take(3)->get();

            return view('front.blog',compact('latestBlog','search', 'tags','categories','popularBlog'));
    }

}
    
