<!doctype html>

<html>
<head>
    <title>all-post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/cosmo/bootstrap.min.css"
          integrity="sha384-5QFXyVb+lrCzdN228VS3HmzpiE7ZVwLQtkt+0d9W43LQMzz4HBnnqvVxKg6O+04d"
          crossorigin="anonymous">

</head>
</html>
<body>

<ul>
    <li><a href="/">Contact M</a>
    <li><a href="/home">Home</a></li>
    <li><a href="/registration">Registration</a></li>
    <li><a href="/newpost">New Post</a></li>

</ul>
<hr>

<div class="container">

    <div class="col-md-12">
        <h1>{{ $post->title }}</h1>
        <p>
            {{ $post->body }}
        </p>
        <div>
            <span class="badge">Posted {{ $post->created_at }}
        </div>
    </div>

</div>
<div class="modal-footer">

    <a href="/edit-post/{{ $post->id }}" class="btn btn-primary">Edit</a>
    <form action="/delete-post/{{ $post->id }}" method="post">
        @csrf
        <button type="submit" class="btn btn-success">Delete</button>
    </form>

</div>

</body>


