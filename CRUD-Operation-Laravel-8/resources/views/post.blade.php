<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Post</title>
</head>
<body>
    <h1 style="text-align: center"><em>All Posts</em></h1>
    @if(Session::has('post_deleted'))
    <div class="alert alert-primary" role='alert'>
        {{Session::get('post_deleted')}}
        </div>
    @endif
    <hr>
    @foreach($post as $post)   
                             {{-- post database ka nam hai aur post_title column ka nam --}}
    <h4 style="text-transform:uppercase; color:red;">{{$post->post_title}}</h4>
    <h5><em>{{$post->post_description}}</em></h5>
    <a class="btn btn-primary" href="/post/{{$post->post_id}}">View</a>
    <a class="btn btn-info" href="/edit_post/{{$post->post_id}}">Edit</a>
    <a class="btn btn-secondary" href="/delete_post/{{$post->post_id}}">Delete</a>

    <hr>
    @endforeach
    <a href="/add-post"  class="btn btn-danger">ADD POST</a>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>