@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-400 pt-100">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">Title</h1>

                <a class="text-center bg-blue-600 text-gray-50 py-2 px-4 font-bold text-xl uppercase" href="/blog">Read More</a>

            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2021/08/25/20/42/field-6574455_960_720.jpg" alt="image" width="700">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Sub title?
            </h2>
            <p class="py-8 text-gray-500 text-sm">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias assumenda dolorum eum eveniet hic laborum.
            </p>
            <p class="font-extrabold text-gray-600 text-sm pb-9">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dolorem, ea esse itaque, laudantium magni nostrum provident.
            </p>

            <a class="uppercase bg-blue-500 text-gray-100 text-sm font-extrabold rounded-3xl py-3 px-8" href="/blog">More</a>
        </div>

    </div>


    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-lg">Lorem ipsum ...</h2>

        <span class="font-extrabold block text-4xl py-1">UX Design</span>
        <span class="font-extrabold block text-4xl py-1">UX Design</span>

    </div>


    <div class="text-center py-5">
        <span class="uppercase text-sm text-gray-400">Blog</span>

        <h2 class="text-4xl font-bold py-10">Recent Posts</h2>

        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Adipisci architecto commodi consectetur consequatur corporis doloremque eligendi ex fugiat in,
            inventore necessitatibus nesciunt quibusdam reiciendis repellendus sapiente veniam veritatis,
            vitae voluptatibus?
        </p>

    </div>


    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-blue-600 text-gray-400 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    PHP
                </span>
                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, molestias, sunt? Ab accusamus, dicta explicabo
                    facere optio ullam veritatis? Adipisci dignissimos incidunt laboriosam
                    minima nam nostrum quod sed velit voluptates.
                </h3>

                <a class="uppercase bg-transparent border-2 border-gray-200 text-gray-100 text-xs font-extrabold px-5 py-3 rounded-3xl" href="#">Find Out More</a>
            </div>
        </div>

        <div>
            <img src="https://cdn.pixabay.com/photo/2021/08/25/20/42/field-6574455_960_720.jpg" alt="image" width="700">
        </div>

    </div>



@endsection
