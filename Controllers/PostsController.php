<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //method for saving a new post
    public function saveNewPost(Request $request)
    {
        /*
         * get the title and body of the post from the request (form data submitted by the user)
         * and store them in variables
         * */
        $title = $request['title'];
        $body = $request['body'];

        /*
         * Use the Post Model to create a new post in the posts table in the database
         * */
        $newPost = \App\Post::create([
            "title" => $title,
            "body" => $body,
        ]);

        /*
         * After creating a post, redirect to the page listing all posts
         * */
        return redirect('/all-posts');/*File has been saved.*/
    }

    //method to list all posts
    public function listAllPosts()
    {
        /*
         * Fetching all the posts created, from the last/latest/recently created,
         * and storing them in a variable
         * */
        $allPosts = \App\Post::latest()->get();

        /*
         * Return the view to list the posts, passing the posts fetched above to the view
         * */
        return view('all_posts')
            ->with([
                "posts" => $allPosts
            ]);
    }

//method to view post
    public function newPost()
    {
        return view('newpost');
    }
    // method to view welcome page

    public function welcome()
    {
        return view('welcome');
    }
    // method to view home page

    public function home()
    {
        return view('home');
    }

}
