<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Repositories\Posts;
use Carbon\Carbon;

class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(){

        // return session('message');

        //Read on php 7 shortcuts
        if (request(['month', 'year'])) {
            $posts = Post::latest()
            ->filter(request(['month', 'year']))
            ->get();
        } else {
            $posts = Post::latest()->get();
        }
        
    	return view('posts.index', compact('posts'));
    }

    public function show(Post $post){
    	return view('posts.show', compact('post'));
    }

    public function create(){
    	return view('posts.create');
    }
    
    public function store(){

    	//Create a new request using the post data
    	//$post = new Post;

    	//$post->title = request('title');
    	//$post->body = request('post_content');

    	//Save the post to the database
    	//$post->save();

        $this->validate(request(), [
            'title' => 'required',
            'post_content'  => 'required'
        ]);

        auth()->user()->publish(
            new Post([
                'title' => request('title'),
                'body'  => request('post_content')
            ])
        );

        session()->flash('message', 'Your post has been published!');
        
    	/*Post::create([
    		'title'   => request('title'),
    		'body'    => request('post_content'),
            'user_id' => auth()->id()
    	]);*/
    	
    	//Redirect to the homepage
    	return redirect('posts');
    }
}


