{{-- <div class="group relative  opacity-90 hover:opacity-100 bg-gray-light ">
    <div class="w-full min-h-80 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
        <img src="{{ asset('img/introduction/wheel.png') }}" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
    </div>


    <div class=" text-center space-y-1 bg-gray-old py-2 ">
        <h3 class="text-sm text-gray-700">
            <a href="#">
                <span aria-hidden="true" class="absolute inset-0  "></span>
                <span class="text-sm text-gray-400 font-bold">osobní auto</span>
            </a>
        </h3>
        <h1 class="text-base text-white font-bold font-poppins"></h1>
        <h3 class="text-sm text-gray-400 font-bold">nástřiky dutin</h3>
    </div>
</div> --}}

<h1>{{ $post->car }}</h1>
<h1>{{ $post->type }}</h1>
<img src="{{ asset('posts/thumbNail/'.$post->cover) }}" class="h-52" >
