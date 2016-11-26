<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
Use Session;

class PostController extends Controller
{


    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //create a variable and store blog posts from database
        $posts =Post::orderBy('id','desc') ->paginate(5);
        return view('posts.index')->withPosts($posts);
        //return a view and pass in the above variabel
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate
       $this ->validate($request , array(
                'title' => 'required|max:255',
                'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
                'body' => 'required'

            ));
       // store in db
        $post= new Post;
        $post->title=$request->title;
        $post->slug=$request->slug;
        $post->body=$request->body;
        $post->save();
        // redirect
        Session::flash('success','The blog post was succesfully saved!');

        return redirect()->route('posts.show',$post->id);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $post = Post::find($id);
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the post in the database as a var
        $post=Post::find($id);
        //return the view and pass in the var we previously created
        return view('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate the data
        $this ->validate($request , array(
                'title' => 'required|max:255',
                'body' => 'required'
            ));
        // Save the data to database
        $post=Post::find($id);
        $post->title= $request->input('title');
        $post->body= $request->input('body');
        $post->save();
        //set flash message
        Session::flash('success','The blog post was succesfully saved!');
        //redirect with flash data to posts.show
        return redirect()->route('posts.show',$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);
        $post->delete();
        Session::flash('success','The blog post was succesfully deleted!');
        return redirect()->route('posts.index');
    }
}
