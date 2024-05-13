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
       <h2 class="text-white text-center">ADD TAG</h2>
     </div>
     <div class=container>
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card border-0 shadow-lg my-3">
                    <div class="card-header">
                        <h3>Tag details</h3>
                        <form  action="{{ route('account.saveCategory') }}" method="POST">
                            @csrf
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input value="{{ old('title') }}" type="text" class="form-control @error('name') is-invalid @enderror form-control-lg"  name="name">
                            @error('name')
                                <p class="invalid-feedback">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-lg btn-primary">Submit</button>
                    </div>

                </form>
                </div>
            </div>
        </div>
        <a href="{{ route('account.profile') }}">Back to main menu</a>
     </div>
      
     

   </body>
</html>


