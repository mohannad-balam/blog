@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-orange-500 text-5xl uppercase font-bold text-shadow-md pb-14">
                    Do you want to become a developer?
                </h1>
                <a
                    href="/blog"
                    class="text-center bg-gray-50 hover:bg-gray-500 text-black py-2 px-4 font-bold text-xl rounded-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div class="rounded">
            <img class="rounded" src="https://cdn.pixabay.com/photo/2020/01/26/20/14/computer-4795762_960_720.jpg" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Struggling to be a better developer?
            </h2>

            <p class="py-8 text-gray-500 text-s">
                Then Check Out My Dev Blog
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                This Community I've built in order to help Other Developers Connect and share experience between each others .. hope you all have fun learning
            </p>

            <a
                href="/blog"
                class="uppercase bg-blue-500 hover:bg-blue-900 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
            I'm an expert in...
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Mobile Development
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Project Management
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Strategy
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Backend Development
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Here You Can Find The Recent Posts Have Been Added recently to my blog .. Press (Find Out More) to see more posts
        </p>
    </div>
    @foreach ($recentsPosts as $post)
        <div class="sm:grid grid-cols-2 w-4/5 m-auto">
            <div class="flex bg-blue-400 text-gray-100 pt-10 rounded-3xl">
                <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                    <span class="uppercase text-l font-bold">
                        {{$post->title}}
                    </span>

                    <h3 class="text-m py-10">
                        {{$post->description}}
                    </h3>

                    <a
                        href="/blog"
                        class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs hover:bg-blue-300 font-extrabold py-3 px-5 rounded-3xl">
                        Find Out More
                    </a>
                </div>
            </div>
            <div class="rounded ml-5">
                <img class="rounded-xl" src="{{ asset('images/' . $post->image_path) }}" width="700" alt="">
            </div>
        </div>
        <br> <br>
    @endforeach

@endsection
