<nav class="xl:py-2 bg-gray-old ">
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

                        <div class="{{ active(['/']) }} flex items-center hover:bg-gray-medium hover:text-red-300 space-x-2 text-red-500 px-3 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-custom hidden xl:block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>

                            <a href="{{ route('domu') }}" class="font-montserrat py-2 rounded-md text-lg font-medium">Domů</a>

                        </div>

                        <div class="{{ active(['galerie', '/galerie/*']) }} flex items-center hover:bg-gray-medium hover:text-red-300 space-x-2 text-red-500 px-3 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-custom hidden xl:block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <a href="{{ route('galerie') }}" class="font-montserrat py-2 rounded-md text-lg font-medium">Galerie</a>    
                        </div>

                        <div class="{{ active(['cenik', '/cenik/*']) }} flex items-center hover:bg-gray-medium hover:text-red-300 space-x-2 text-red-500 px-3 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-custom hidden xl:block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            
                            <a href="{{ route('cenik') }}" class="font-montserrat py-2 rounded-md text-lg font-medium">Ceník</a>
                        </div>
                        
                        <div class="{{ active(['kontakt', '/kontakt*']) }}  flex items-center hover:bg-gray-medium hover:text-red-300 space-x-2 text-red-500 px-3 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-custom hidden xl:block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                            
                            <a href="{{ route('kontakt') }}" class="font-montserrat py-2 rounded-md text-lg font-medium">Kontakt</a>
                        </div>
                        
                        @auth
                            <a href="{{ route('dashboard') }}" class="{{ active(['dashboard', '/dashboard*']) }} font-montserrat text-blue-500 hover:bg-gray-medium hover:text-red-300 px-3 py-2 rounded-md text-lg font-medium">Dashboard</a>
                        @endauth

                    </div>
                </div>

                            
                <div class="hidden sm:grid sm:justify-items-end  sm:w-5/12 ">
                    <div class="flex items-center">
                        <h1 class="sm:hidden lg:block sm:text-xs lg:text-base font-montserrat text-gray-300 font-medium">+420 730 681 670</h1>

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
            <a href="{{ route('domu') }}" class="font-montserrat text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Domů</a>
    
            <a href="{{ route('galerie') }}" class="font-montserrat text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Galerie</a>
    
            <a href="{{ route('cenik') }}" class="font-montserrat text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Ceník</a>
    
            <a href="{{ route('kontakt') }}" class="font-montserrat text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Kontakt</a>
        </div>
    </div>
</nav>