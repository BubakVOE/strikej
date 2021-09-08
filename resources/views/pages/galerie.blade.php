@extends('layouts.app')

@section('content')

    <section class="space-y-2 xl:space-y-10">


        <div class="lg:w-10/12 mx-2 lg:m-auto flex items-center">
            <div class="py-16 px-4 sm:py-24 sm:px-6 lg:px-8 w-full bg-gray-medium rounded-md">
                <h2 class="text-2xl font-extrabold tracking-tight text-white font-poppins border-b-2 border-white">2021</h2>
            
                <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">

                    @foreach ($Posts as $post)

                        <div class="group relative  opacity-90 hover:opacity-100 bg-gray-light ">
                            <div class="w-full min-h-80 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                                <img src="{{ asset('posts/thumbNail/'.$post->cover) }}" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                            </div>
                        
                        
                            <div class=" text-center space-y-1 bg-gray-old py-2 ">
                                <h3 class="text-sm text-gray-700">
                                    <a href="/galerie/{{ $post->id }}">
                                        <span aria-hidden="true" class="absolute inset-0  "></span>
                                        <span class="text-sm text-gray-400 font-bold">osobní auto</span>
                                    </a>
                                </h3>
                                <h1 class="text-base text-white font-bold font-poppins">{{ $post->car }} {{ $post->type }}</h1>
                                <h3 class="text-sm text-gray-400 font-bold">nástřiky dutin</h3>
                            </div>
                        </div>

                    @endforeach
            
                </div>
            </div>
        </div>


        


    </section>

@endsection