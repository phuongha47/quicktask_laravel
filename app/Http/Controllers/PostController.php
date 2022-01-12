<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\AddPostRequest;
use App\Http\Requests\EditPostRequest;
use App\Models\Author;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function index()
    {
        return view("insert");
    }

    public function getPostAuthor($id)
    {
        $posts = Author::findOrFail($id)->load('post');
        
        return view('author', compact(['posts'])); 
    }

    public function showDetail(Post $post, $id)
    {
        $posts = Post::findOrFail($id)->load('author');

        return view('detail', compact(['posts']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddPostRequest $request)
    {   
        $post = Post::create(($request->all()));
    
        return redirect("show");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $posts = Post::all();
        
        return view('show', compact(['posts']));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post, $id)
    {
        $posts = Post::findOrFail($id);

        return view('edit', compact(['posts']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(EditPostRequest $request, Post $post, $id)
    {
        $posts = Post::findOrFail($id);
        $posts->update($request->all());
        
        return redirect("show");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post, $id)
    {
       $posts = Post::findOrFail($id);
       $posts->delete();

       return redirect("show");
    }
}
