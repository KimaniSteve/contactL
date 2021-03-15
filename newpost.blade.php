<!doctype html>

<html>
<head>
    <title>New Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/cosmo/bootstrap.min.css"
          integrity="sha384-5QFXyVb+lrCzdN228VS3HmzpiE7ZVwLQtkt+0d9W43LQMzz4HBnnqvVxKg6O+04d"
          crossorigin="anonymous">
</head>

<h1>New Post</h1>


<ul>
    <li><a href="/home">Home</a>
    <li><a href="/registration">Registration</a></li>
    <li><a href="/">Contact M</a></li>
    <li><a href="/all-posts">All Post</a></li>

</ul>


</html>

<div class="container">
    <div class="col-md-6">
        <form method="post" action="/save-post">
            @csrf
            <div class="form-group">
                <label for="pwd">Post Title:</label>
                <input name="title" type="text" class="form-control" id="pwd">
            </div>
            <div class="form-group">
                <label for="pwd">Post Body:</label>
                <textarea name="body" class="form-control"></textarea>
            </div>



            <!--            <button type="save" class="btn btn-primary">Save</button>-->
            <!--            <button type="post" class="btn btn-success">Post</button>-->

            <button type="submit" class="btn btn-secondary">Create Post</button>
        </form>
<!--        <form method="list" action="/save-post">
            @csrf
            <div class="form-group">
                <label for="title">Post Title:</label>
            <input name="title" type="text">
            <input body="body" type="text">
            </div>>
        </form>-->


    </div>
</div>


