@extends('layouts.app')

@section('content')

    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl">
                Edit Post
            </h1>
        </div>
    </div>

    @if ($errors->any())
        <div class="w-4/5 m-auto">
            <ul>
                @foreach($errors as $error)
                    <li class="w-1/5 mb-4 text-white bg-red-600 rounded-2xl px-8">$error</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="w-4/5 m-auto pt-20">
        <form action="/blog/{{$post->slug}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <input type="text" name="title" value="{{$post->title}}" class="bg-gray-100 block border-b-2 w-full h-20 text-6xl outline-none">

            <textarea class="bg-gray-100 py-20 block border-b-2 w-full h-60 text-xl outline-none" name="description" placeholder="Description" id="" cols="30" rows="10">
                {{$post->description}}
            </textarea>


            <div class="bg-gray-100 pt-15">
                <label for="" class="w-44 flex flex-col items-center px-2 py-3  bg-white shadow-lg tracking-wide uppercase border border-blue-50 cursor-pointer">
                    <span class="mt-2 text-base leading-normal ">
                        Select a file
                    </span>
                    <input style="opacity: 0.1" type="file" name="image" class="">
                </label>
            </div>

            <button type="submit" class="mt-15 uppercase bg-blue-500 font-extrabold py-4 px-8 rounded-3xl text-white">
                Post
            </button>


        </form>

    </div>

@endsection
