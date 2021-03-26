@extends('layouts.app')

@section('content')

    <div class="bg-white pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
        <div class="relative max-w-lg mx-auto divide-y-2 divide-gray-200 lg:max-w-7xl">


            <div>
                <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">
                    Recent publications
                </h2>
                <p class="mt-3 text-xl text-gray-500 sm:mt-4">
                    Nullam risus blandit ac aliquam justo ipsum. Quam mauris volutpat massa dictumst amet. Sapien tortor
                    lacus arcu.
                </p>
            </div>


            <div class="mt-12 grid gap-16 pt-12 lg:grid-cols-3 lg:gap-x-5 lg:gap-y-12">

                @foreach($posts as $post)
                <div>
                    <div>
                        <a href="#" class="inline-block">
                            <span
                                class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800">
                              Article
                            </span>
                        </a>
                    </div>
                    <a href="#" class="block mt-4">
                        <p class="text-xl font-semibold text-gray-900">
                            {{ $post->title }}
                        </p>
                        <p class="mt-3 text-base text-gray-500">
                            {{ $post->content }}
                        </p>
                    </a>
                    <div class="mt-6 flex items-center">
                        <div class="flex-shrink-0">
                            <a href="#">
                                <span class="sr-only">{{ $post->user->name }}</span>
                                <img class="h-10 w-10 rounded-full"
                                     src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixqx=epMV6kgxVN&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                     alt="">
                            </a>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">
                                <a href="#">
                                    {{ $post->user->name }}
                                </a>
                            </p>
                            <div class="flex space-x-1 text-sm text-gray-500">
                                <time datetime="2020-03-16">
                                    {{ $post->created_at }}
                                </time>
                                <span aria-hidden="true">&middot;</span>
                                <span>6 min read</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection
