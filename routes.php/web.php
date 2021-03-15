<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/login', 'LoginController@index');

//Route::get('/home', function () {
//    return view('home');

Route::get('/registration', function () {
    return view('registration');
});

/*
 * Routes for Blog Posts
 * */
//Route to go to a page to create a new post
Route::get('/newpost', "PostsController@newPost");

//Route to go to a page to create a welcome page
Route::get('/', "PostsController@welcome");

//Route to go to a page to create a welcome home page
Route::get('/home', "PostsController@home");


//Route where the new post form submits to, to save a new post
Route::post('/save-post', "PostsController@saveNewPost");
Route::get('/heading', function () {
    return view('heading');
});

//Route to list all posts created
Route::get('/all-posts', "PostsController@listAllPosts");

/*
 * Route to view a post, it expects the id of the post as a parameter
 * */
Route::get("/post/{id}", function($id){
    //$post = \App\Post::find($id);

    /*
     * Fetch the post with the given id and store it in a variable
     * */
    //SELECT FROM posts WHERE id LIKE $id
    $post = \App\Post::where('id', $id)->first();

    /*
     * Check if a post with the given id has been found. If not found, we return an error
     * message: Post not found.
     * If found, we return the page to view the post,and pass the post to the view/page
     * */
    if($post == null){
        throw new \Exception("Post not found");
    }

    return view("view_post")
        ->with([
            'post' => $post
        ]);


});

/*
 * Route to edit a post, it expects the id of the post as a parameter
 * */
Route::get("/edit-post/{id}", function($id){
    //$post = \App\Post::find($id);

    /*
     * Fetch the post with the given id and store it in a variable
     * */
    //SELECT FROM posts WHERE id LIKE $id
    $post = \App\Post::where('id', $id)->first();

    /*
     * Check if a post with the given id has been found. If not found, we return an error
     * message: Post not found.
     * If found, we return the page to view the post,and pass the post to the view/page
     * */
    if($post == null){
        throw new \Exception("Post not found");
    }

    return view("edit-post")
        ->with([
            'post' => $post,
            'testArray' => [
                "message" => "Array sent to view using keyword with"
            ]
        ]);


});
Route::post('/update-post', function(\Illuminate\Http\Request $request){
    /*
     * 1. Identify the post being edited, and show error if the post cannot be found
     * 2. Save the new title and body of the post
     * 3 Redirect the user to the page for viewing a post (to view the edited post)
     * */

    /*
     * 1.
     * Fetch the post with the given id and store it in a variable
     * */
    //SELECT FROM posts WHERE id LIKE $id
    $post = \App\Post::where('id', $request['post_id'])->first();

    /*
     * Check if a post with the given id has been found. If not found, we return an error
     * message: Post not found.
     * */
    if($post == null){
        throw new \Exception("Post not found");
    }

    //2.
    $post->title = $request['title'];
    $post->body = $request['body'];
    $post->save();

    //3.
    return redirect('/post/'.$request['post_id']);
});
Route::post('/destroy-post', function(\Illuminate\Http\Request $request){
    /*
     * 1. Identify the post being deleted, and show error if the post cannot be found
     * 2. Save the new title and body of the post
     * 3 Redirect the user to the page for viewing a post (to view the edited post)
     * */

    /*
     * 1.
     * Fetch the post with the given id and store it in a variable
     * */
    //SELECT FROM posts WHERE id LIKE $id
    $post = \App\Post::where('id', $request['post_id'])->first();

    /*
     * Check if a post with the given id has been found. If not found, we return an error
     * message: Post not found.
     * */
    if($post == null){
        throw new \Exception("Post not found");
    }

    //2.
    $post->title = $request['title'];
    $post->body = $request['body'];
    $post->save();

    //3.
    return redirect('/post/'.$request['post_id']);
});
Route::post('/edit-post', function(\Illuminate\Http\Request $request){


});
Route::delete('/login/{login}','LoginController@destroy');

route::resource('login','LoginController@index');


Route::post("/delete-post/{id}", function($postId){
    /*
     * 1. Identify the post
     * 2. Delete the post
     * 3. Redirect the user to all posts
     * */

    //1. Identify the post
    //$post = \App\Post::find($postId);
    $post = \App\Post::where('id', $postId)->first();

    //2. Validate a post is found
    /*
     * Check if a post with the given id has been found. If not found, we return an error
     * message: Post not found.
     * */
    if($post == null){
        throw new \Exception("Post not found");
    }

    //3. Delete post
    $post->delete();

    //4. Redirect the user to all posts page
    return redirect('/all-posts');
});


//    Route::post('/edit-post', function(\Illumin
//ate\http\Request $request)
//
//    $post = \App\Post::where('id', $request['post_id'])->first();
//
//    if($post == null){
//        throw new \Exception("Post not found");
//    }
//
//    //2.
//    $post->title = $request['title'];
//    $post->body = $request['body'];
//    $post->save();
//
//    //3.
//    return redirect('/post/'.$request['post_id']);

