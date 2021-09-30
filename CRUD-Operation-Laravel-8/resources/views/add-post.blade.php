<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>DB CRUD OPERATIONS</title>
</head>
<body>
    <section class="container">
    <div class="row">
    <div class="col-md-6 offset-md-3">
    <div class="card">
    <div class="card-header">
    Add New Post
    </div>
    <div class="card-body">
    @if(Session::has('post_created'))
    <div class="alert alert-primary" role='alert'>
    {{Session::get('post_created')}}
    </div>
    @endif
    <form method="post" action="{{route('post.addsubmit')}}">
    @csrf
    <div class="form-group">
    <label for="title">Post title</label><br>
    <input class="col-md-12 " type="text" name="title" id="title">
    </div>
    <div class="form-group">
    <label for="description">
    Add Description
    </label>
    <textarea name="description" id="description" rows="3" class="form-control"></textarea>
    </div>
    <button class="btn btn-success" type="submit">Submit</button>
    <a href="/post" class="btn btn-primary">CHECK POST</a>
    </form>
    </div>
    </div>
    </div>
    </div>
    </section>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>