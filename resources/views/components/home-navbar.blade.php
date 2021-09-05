<nav class="xl:py-2 ">
    <div class="w-10/12 mx-auto px-2 sm:px-6 lg:px-8 ">
        <div class="relative flex items-center justify-between h-16">
            {{-- pro mobil --}}
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
            
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                
            </div>
            
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">

                <div class="flex-shrink-0 flex items-center sm:w-2/12 ">
                    <img class="block h-12 w-auto" src="{{ asset('img/logo/auto-logo.png') }}" alt="Workflow">
                </div>

                <div class="hidden sm:block sm:ml-6  w-full ">
                    <div class="flex justify-evenly space-x-2 items-center xl:h-full xl:w-5/12 xl:m-auto py-3 ">

                        <a href="{{ route('home') }}" class="{{ active(['/']) }} font-montserrat text-red-500 hover:bg-gray-medium hover:text-red-300 px-3 py-2 rounded-md text-lg font-medium">Domů</a>
        
                        <a href="{{ route('home-galerie') }}" class="{{ active(['galerie', '/galerie/*']) }} font-montserrat text-red-500 hover:bg-gray-medium hover:text-red-300 px-3 py-2 rounded-md text-lg font-medium">Galerie</a>
        
                        <a href="{{ route('home-cenik') }}" class="{{ active(['cenik', '/cenik/*']) }} font-montserrat text-red-500 hover:bg-gray-medium hover:text-red-300 px-3 py-2 rounded-md text-lg font-medium">Ceník</a>
        
                        <a href="{{ route('home-kontakt') }}" class="{{ active(['kontakt', '/kontakt*']) }} font-montserrat text-red-500 hover:bg-gray-medium hover:text-red-300 px-3 py-2 rounded-md text-lg font-medium">Kontakt</a>

                    </div>
                </div>

                            
                <div class="hidden sm:grid sm:justify-items-end  sm:w-5/12 ">
                    <div class="flex items-center">
                        <h1 class="sm:text-xs lg:text-base font-montserrat text-gray-300 font-medium">+420 730 681 670</h1>

                        <div class="hidden md:flex flex-col pl-5 ">
                            <div class="bg-gray-500 bg-gradient-to-br hover:from-purple-700 hover:to-pink-400 rounded-full my-1">
                                <a href="">
                                    <img class="sm:w-5 sm:h-5" src="{{ asset('img/socialmedia/instagram.png') }}">
                                </a>
                            </div>
                            <div class="bg-gray-500 hover:bg-blue-700 rounded-full my-1">
                                <a href="">
                                    <img class="sm:w-5 sm:h-5" src="{{ asset('img/socialmedia/facebook.png') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </div>

<!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="{{ route('home') }}" class="font-montserrat text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Domů</a>
    
            <a href="{{ route('home-galerie') }}" class="font-montserrat text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Galerie</a>
    
            <a href="{{ route('home-cenik') }}" class="font-montserrat text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Ceník</a>
    
            <a href="{{ route('home-kontakt') }}" class="font-montserrat text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Kontakt</a>
        </div>
    </div>
</nav>