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
    Edit Post
    </div>
    <div class="card-body">
        {{-- action ke andhar jo route lihka hai vo jo controller ke name me lihka hai vo vala name hai --}}
        @if(Session::has('post_updated'))
        <div class="alert alert-primary" role='alert'>
            {{Session::get('post_updated')}}
            </div>
        @endif
        
    <form method="post" action="{{route('post.update')}}">
    @csrf
    {{-- name me jo post_id hai vo database ke andhar jo column hai uska nam hai --}}
    <input type="hidden" name="post_id" value="{{$post->post_id}}"/> 
    <div class="form-group">
    <label for="title">Post title</label><br>
                                                {{-- $post jo controller me functrion me declear kiya hoga vo dalna hota hai fir database ka colume name  --}}
    <input class="col-md-12" type="text" name="title" id="title" value="{{$post->post_title}}">
    </div>
    <div class="form-group">
    <label for="description">
    Add Description
    </label>
    <textarea name="description" id="description" rows="3" class="form-control">{{$post->post_description}}</textarea>
    </div>
    <button class="btn btn-success" type="submit">Update</button>
    <a href="/post" class="btn btn-primary">Check Post</a>
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