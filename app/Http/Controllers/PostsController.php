<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$post =Post::all();
        //dd($post);
        return view('blog.index')->with('posts', Post::orderBy('updated_at','DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:jpg,jpeg,png,gif|max:5048'
        ]);

        $new_image_name = uniqid() . "-" . $request->title . "." . $request->image->extension();

        $request->image->move(public_path('images'), $new_image_name);

        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);

        //dd($slug);

        Post::create([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'slug'=>$slug,
            'image_path'=>$new_image_name,
            'user_id'=>auth()->user()->id

        ]);

        return redirect('/blog')->with('message', 'Your post has been published!');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        //return view('blog.show')->with(Post:where('slug', $slug)->first());
        return view('blog.show')->with('post',Post::where('slug', $slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit(string $slug)
    {
        //
        return view('blog.edit')->with('post', Post::where('slug', $slug)->first());

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        //

        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:jpg,jpeg,png,gif|max:5048'
        ]);

        $new_image_name = uniqid() . "-" . $request->title . "." . $request->image->extension();

        $request->image->move(public_path('images'), $new_image_name);

        //$slug = SlugService::createSlug(Post::class, 'slug', $request->title);


        Post::where('slug', $slug)->update([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'slug'=>$slug,
            'image_path'=>$new_image_name,
            'user_id'=>auth()->user()->id
        ]);

        return redirect('/blog')->with('message', 'Your post has been updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
