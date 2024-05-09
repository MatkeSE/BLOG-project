<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

       @if(Session::has('success'))
       <div class="col-md-10">
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
       </div>
       @endif

     <div class="bg-dark py-3">
       <h2 class="text-white text-center">ADD BLOG</h2>
     </div>
     <div class=container>
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card border-0 shadow-lg my-3">
                    <div class="card-header">
                        <h3>Blog details</h3>
                        <form enctype="multipart/form-data" action="{{ route('account.saveBlog') }}" method="POST">
                            @csrf
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="">Title</label>
                            <input value="{{ old('title') }}" type="text" class="form-control @error('title') is-invalid @enderror form-control-lg"  name="title">
                            @error('title')
                                <p class="invalid-feedback">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="" class="mb-2">Category<span class="req"></span></label>
                            <select name="category" id="category" class="form-control">
                                <option value="">Select a Category</option>
                                @if ($categories->isNotEmpty())
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="mb-2">Tag<span class="req"></span></label>
                            <select name="tag" id="tag" class="form-select">
                                <option value="">Select Tag</option>
                                @if ($tag->isNotEmpty())
                                    @foreach ($tag as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Author</label>
                        <input value="{{ old('author') }}" type="text" class="form-control @error('author') is-invalid @enderror form-control-lg" name="author">
                        @error('author')
                        <p class="invalid-feedback">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Brief</label>
                        <textarea {{ old('brief') }} type="text" class="form-control @error('brief') is-invalid @enderror form-control-lg" name="brief">{{ old('brief') }}</textarea>
                        @error('brief')
                        <p class="invalid-feedback">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Image</label>
                        <input type="file" class="form-control form-control-lg" name="image">
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-lg btn-primary">Submit</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
     </div>
      
     

   </body>
</html>

















{{-- <form action="" method="post" id="createBlogForm" name="createBlogForm">
            
    <h3 class="fs-4 mb-1">Add new blog</h3>
    <label for="" class="mb-2">Title<span class="req">*</span></label>
    <input type="text" placeholder="Blog Title" id="title" name="title" class="form-control">
     <br> <br>    
                       
                            <label for="" class="mb-2">Category<span class="req">*</span></label>
                            <select name="category" id="category" class="form-control">
                                <option value="">Select a Category</option>
                                @if ($categories->isNotEmpty())
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                            <br><br>
                      
                    
                   
                            <label for="" class="mb-2">Tag<span class="req">*</span></label>
                            <select name="tag" id="tag" class="form-select">
                                <option value="">Select Tag</option>
                                @if ($tag->isNotEmpty())
                                    @foreach ($tag as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                          <br><br>
                       
                            <label for="" class="mb-2">Author<span class="req">*</span></label>
                            <input type="number" min="1" placeholder="Author" id="author" name="author" class="form-control">
                           
                     <br><br>
                    
                            <label for="" class="mb-2">Image*</label>
                            <input type="file"  name="image" id="image" class="form-control">
                        

                        <br><br>
                            
                      

                   
                        <label for="" class="mb-2">Brief<span class="req">*</span></label>
                        <textarea class="textarea" name="description" id="description" cols="5" rows="5" placeholder="Description"></textarea>

                        <br><br> <button type="submit" class="btn btn-primary">Save Blog></button>
                    
</form>
          --}}