@extends('layouts.app')

@section('content')

    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl">
                Posts
            </h1>
        </div>
    </div>

    @if(session()->has('message'))
        <div class="w-4/5 m-auto mt-10 pl-12">
            <p class="w-1/6 mb-4 text-white bg-green-500 rounded-2xl py-4 px-8">
                {{session()->get('message')}}
            </p>
        </div>
    @endif

    @if (\Illuminate\Support\Facades\Auth::check())
        <div class="pt-15 w-4/5 m-auto">
            <a href="/blog/create" class="px-5 bg-blue-500 uppercase bg-transparent text-white text-xs font-extrabold py-3 rounded-3xl">
                Publish a post
            </a>
        </div>
    @endif

    @foreach($posts as $post)

        <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
            <div>
                <img src="https://cdn.pixabay.com/photo/2021/08/25/20/42/field-6574455_960_720.jpg" alt="image" width="700">
            </div>

            <div>
                <h2 class="text-gray-800 font-bold text-5xl pb-4 ">
                    {{$post->title}}
                </h2>
                <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800">{{$post->user->name}}</span>, Published on {{ date('jS M Y'), strtotime($post->updated_at)  }}
            </span>
                <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                    {{$post->description}}
                </p>
                <a class="uppercase bg-blue-500 text-gray-50 text-lg font-extrabold py-4 px-8 rounded-3xl" href="/blog/{{$post->slug}}">Keep Reading</a>

                @if(isset(\Illuminate\Support\Facades\Auth::user()->id) && \Illuminate\Support\Facades\Auth::user()->id == $post->user_id)
                    <span class="">
                        <a class="uppercase bg-gray-800  text-lg font-extrabold py-4 px-8 rounded-3xl text-white" href="/blog/{{$post->slug}}/edit">Edit</a>
                    </span>
                @endif

            </div>

        </div>


    @endforeach

@endsection
