
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>


<h2 class="text-center">Hello admin</h2>

<br>
<div class="container">
    <div class="row">
        <div class="col-md-3">
           <a href="{{ route('account.createBlog') }}">
            <div class="card">
                <div class="card-body text-center">
                <br>
                <h4>Add Blog</h4>
                ------------
                </div>
            </div>
            </a>
        </div>
        <br><br>



          <div class="card-body">
            <br><br><br>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th></th>
                    <th>Title</th>
                    <th>Tag</th>
                    <th>Category</th>
                    <th>Author</th>
                    <th>Created</th>
                    <th>Action</th>
                </tr>
                @if($blogs->isNotEmpty())
                @foreach($blogs as $blog)
                <tr>
                    
                    <td>{{ $blog->id }}</td>
                    <td>
                        @if($blog->image != "")
                           <img width="65" src="{{ asset('uploads/'.$blog->image) }}" alt="">
                        @endif
                    </td>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->category->name ?? 'FIX' }}</td>
                    <td>{{ $blog->tag->name ?? 'FIX' }}</td>
                   
                    <td>{{ $blog->author }}</td>
                    <td>{{  \Carbon\Carbon::parse($blog->created_at)->format('d M, Y')}}</td>
                    <td>
                        <a href="{{ route('account.editBlog', $blog->id) }}" class="btn btn-dark">Edit</a>
                        <a href="#" onclick="deleteBlog({{$blog->id}})" class="btn btn-danger">Delete
                        <form id="delete-blog-from-{{$blog->id}}" action="{{ route('account.deleteBlog',$blog->id) }}" method="POST">
                           @csrf
                           @method('delete')
                        </form>
                    </a>
                    </td>
                </tr>
                @endforeach
                @endif
             
            </table>
          </div>

        
        
            </a>
        </div>
    </div>
</div>



    <br><br>
        
           <div class="text-center">
                <h4>Do you want to logout?</h4>
                
                <a href="{{ route('account.logout') }}" type="button" class="btn btn-primary">Logout</a>
           </div>
        
        </div>

</div>

</body>
</html>

<script>
      
      function deleteBlog(id){
   if(confirm("Are you sure you want to delete blog?")){
      document.getElementById("delete-blog-from-"+id).submit();
   }
      }
</script>
    
