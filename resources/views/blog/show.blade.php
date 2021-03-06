@extends('layouts.app')

@section('content')

    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl">
                {{$post->title}}
            </h1>
        </div>
    </div>


    <div class="w-4/5 m-auto pt-20">
        <span class="text-gray-500">
              By <span class="font-bold italic text-gray-800">{{$post->user->name}}</span>
            , Published on {{ date('jS M Y'), strtotime($post->updated_at)  }}
        </span>
        <p class="font-light text-gray-800 pt-8 pb-10 leading-8 ">
            {{$post->description}}
        </p>
        <img src="{{url("images/".$post->image_path)}}" alt="{{$post->title}}">
    </div>

@endsection
