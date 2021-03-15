<!doctype html>

<html>
<head>
    <title>Edit-Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/cosmo/bootstrap.min.css"
          integrity="sha384-5QFXyVb+lrCzdN228VS3HmzpiE7ZVwLQtkt+0d9W43LQMzz4HBnnqvVxKg6O+04d"
          crossorigin="anonymous">
</head>

<h1>Edit-Post</h1>


<ul>
    <li><a href="/home">Home</a>
    <li><a href="/registration">Registration</a></li>
    <li><a href="/">Contact M</a></li>
    <li><a href="/all-posts">All Post</a></li>

</ul>


</html>

<div class="container">
    <div class="col-md-6">
        <form method="post" action="/update-post">
            @csrf

            <input type="hidden" name="post_id" value="{{ $post->id }}">
            <div class="form-group">

                <label for="pwd">Post Title:</label>

                <input name="title" type="text" class="form-control" id="pwd" value="{{ $post->title }}">
            </div>
            <div class="form-group">
                <label for="pwd">Post Body:</label>
                <textarea name="body" class="form-control">{{ $post->body }}</textarea>
            </div>

            <button type="submit" class="btn btn-secondary">Save Changes</button>


        </form>
    </div>
</div>
{{--<div class="container">--}}
{{--    <p class="col-md-6">--}}
{{--        <p>--}}
{{--        <p method="post" action="/update-post/{{$post->id}}">--}}
{{--           {{method_field("DELETE")}}--}}
            @csrf
{{--        </p>--}}

{{--            <div class="title">--}}
{{--                <div class="body">--}}

{{--                    <button type="submit" class="btn btn-danger">Delete Changes</button>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}
</div>
