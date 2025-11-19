<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Events\PostEvent;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('post.post_store');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        /*$post = new Post();
        $post->title = "Title1";
        $post->description = "Description1";
        $post->save();*/
        Post::create([
            'title' => "Title1",
            'description' => "Description1"
        ]);
        //
        $post = Post::find(1); 
        event(new PostEvent($post->title, $post->description));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return view('post.post_update');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        //
        $post = Post::findOrFail($id);
        $post->update([
            'title' => 'Title1 Updated',
            'description' => 'Description1 Updated'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Post::where('id', $id)->delete();
    }
}
