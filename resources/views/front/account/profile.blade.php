
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
                <i class="fas fa-plus-square fa-3x text-primary"></i><br>
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
                    <td></td>
                    <td>{{ $blog->title }}</td>
                    <td></td>
                    <td></td>
                   
                    <td>{{ $blog->author }}</td>
                    <td>{{  \Carbon\Carbon::parse($blog->created_at)->format('d M, Y')}}</td>
                    <td>
                        <a href="#" class="btn btn-dark">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
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
