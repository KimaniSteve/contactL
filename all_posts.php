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

</body>

<div class="container">
    @foreach($posts as $singlePost)

<!--        <nav>
            <table cellspacing="5" cellpadding="5">
                <tr>


        <link rel="stylesheet" href="newpost">

                    </tr>
                        </table>
                            </nav>-->

    <div class="col-md-12">
        <h1><a href="/post/{{ $singlePost->id }}">{{ $singlePost->title }}</a></h1>
        <p>
            {{ $singlePost->body }}
        </p>
        <div>
            <span class="badge">Posted {{ $singlePost->created_at }}</span>
        </div>
        <hr>
    </div>

        </div>

    @endforeach

</div>
<div class="input-group">

</div>

</html>

