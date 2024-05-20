<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    //This method show admin registration page
    public function registration(){
        return view('front.account.registration');
    }
    
    //This method will save Admin
    public function processRegistration(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5|same:confirm_password',
            'confirm_password' => 'required'
        ]);

        if ($validator->passes()) {

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            session()->flash('success','You have registerd successfully.');
            
            
            return response()->json([
                'status' => true,
                'errors' => []
            ]);

        } else {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
    }

    //This method show admin login page
    public function login(){
        return view('front.account.login');
    }
    
    //This method will validate admin acc
    public function authenticate(Request $request) {
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->passes()) {
            
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->route('account.profile');
            } else {
                return redirect()->route('account.login')->with('error','Either Email/Password is incorrect');
            }
        } else {
            return redirect()->route('account.login')
                ->withErrors($validator)
                ->withInput($request->only('email'));
        }
    }
    
    public function profile() {

        $blogs = Blog::with('tag')->with('category')->orderBy('created_at','DESC')->get();
  

        return view('front.account.profile', [
            'blogs' => $blogs,
        ]);
        
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('account.login');
    }

    public function createBlog(){
        //pozivanje kategorije i tagova i bloga
        $blog = Blog::get();
        $categories = Category::orderBy('name','ASC')->where('status',1)->get();
        $tag = Tag::orderBy('name','ASC')->where('status',1)->get();

        return view('front.account.blog.create',[
            'categories' => $categories,
            'tag' => $tag,
            'blog' => $blog
        ]
        );
    }

    public function saveBlog(Request $request){
        
        $rules = [
            'title' => 'required|min:5|max:200',
            'author' => 'required',
            'brief' => 'required',
            'category' => 'required',
            'tag' => 'required'
                    

        ];

        if($request->image !="")
        {
            $rules['image'] = 'image' ;
        }

        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect()->route('account.createBlog')->withInput()->withErrors($validator);
        }


        // here we will insert blog in db
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->category_id = $request->category;
        $blog->tag_id = $request->tag;
        $blog->author = $request->author;
        $blog->brief = $request->brief;
        $blog->image = "null";
        $blog->save();

        if($request->image !="")
        {
          //here we will store image
          $image = $request ->image;
          $ext = $image->getClientOriginalExtension();
          $imageName = time().'.'.$ext; //Unique image name

          //here we are saving image to public/uploads
          $image->move(public_path('uploads'),$imageName);

          //here the image will be saved in db
          $blog -> image = $imageName;
          $blog->save();
        }


        return redirect()->route('account.createBlog')->with('success','Blog added successfully');
         
       
    }
    //This method edits blog
    public function editBlog($id){
        
        // echo $id;
        
        //pozivanje bloga based on id
        $blog = Blog::where([
            'id' => $id
        ])->first();
        if($blog == null){abort(404);}

        //pozivanje kategorije i tagova i blogova
        $categories = Category::orderBy('name','ASC')->where('status',1)->get();
        $tag = Tag::orderBy('name','ASC')->where('status',1)->get();

        return view('front.account.blog.edit',[
            'categories' => $categories,
            'tag' => $tag,
            'blog' => $blog
        ]
        );
    }
    //This method update blog
    public function update($id, Request $request)
    {

        $blog = Blog::where([
            'id' => $id
        ])->first();
        if($blog == null){abort(404);}

        $rules = [
            'title' => 'required|min:5|max:200',
            'category' => 'required',
            'tag' => 'required'
                    

        ];

        if($request->image !="")
        {
            $rules['image'] = 'image' ;
        }

        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect()->route('account.editBlog', $blog->id)->withInput()->withErrors($validator);
        }


        // here we will update blog in db
        $blog->title = $request->title;
        $blog->category_id = $request->category;
        $blog->tag_id = $request->tag;
        $blog->author = $request->author;
        $blog->brief = $request->brief;
        $blog->save();

        if($request->image !="")
        {
          //delete old image
          File::delete(public_path('uploads/'.$blog->image));

          //here we will store image
          $image = $request ->image;
          $ext = $image->getClientOriginalExtension();
          $imageName = time().'.'.$ext; //Unique image name

          //here we are saving image to public/uploads
          $image->move(public_path('uploads'),$imageName);

          //here the image will be saved in db
          $blog -> image = $imageName;
          $blog->save();
        }


        return redirect()->route('account.profile')->with('success','Blog updated successfully');
    }

    public function deleteBlog($id)
    {
        $blog = Blog::findOrFail($id);

        //delete old image
        File::delete(public_path('uploads/'.$blog->image));

        $blog->delete();

        return redirect()->route('account.profile')->with('success','Blog deleted successfully');
    }

    public function createTag(){
        

        return view('front.account.tag.create');
    }

    public function saveTag(Request $request){
        
        $rules = [
            'name' => 'required',
        ];

        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect()->route('account.createTag')->withInput()->withErrors($validator);
        }


        // here we will insert blog in db
        $tag = new Tag();
        $tag->name = $request->name;
        $tag->save();


        return redirect()->route('account.createTag')->with('success','Tag added successfully');
         
       
    }
    

  

    public function createCategory(){
        

        return view('front.account.category.create');
    }

    public function saveCategory(Request $request){
        
        $rules = [
            'name' => 'required',
        ];

        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect()->route('account.createCategory')->withInput()->withErrors($validator);
        }


        // here we will insert blog in db
        $c = new Category();
        $c->name = $request->name;
        $c->save();


        return redirect()->route('account.createCategory')->with('success','Category added successfully');
         
       
    }

}
