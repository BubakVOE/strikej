<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    {{-- custom --}}
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;700&display=swap" rel="stylesheet">



</head>
<body class="h-full bg-gray-400 ">
        
    <!-- This example requires Tailwind CSS v2.0+ -->
    <nav class="bg-gray-medium xl:py-2 ">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 ">
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

                    <div class="flex-shrink-0 flex items-center">
                        <img class="block h-12 w-auto" src="{{ asset('img/logo/auto-logo.png') }}" alt="Workflow">
                    </div>

                    <div class="hidden sm:block sm:ml-6  w-full ">
                        <div class="flex justify-evenly spaxe items-center xl:h-full xl:w-5/12 xl:m-auto py-3 ">

                            <a href="#" class="{{ active(['/']) }} font-montserrat text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-lg font-medium">Úvod</a>
            
                            <a href="#" class="{{ active(['/galerie', '/galerie/*']) }} font-montserrat text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-lg font-medium">Galerie</a>
            
                            <a href="#" class="{{ active(['/cenik', '/cenik/*']) }} font-montserrat text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-lg font-medium">Ceník</a>
            
                            <a href="#" class="{{ active(['/kontakt', '/kontakt*']) }} font-montserrat text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-lg font-medium">Kontakt</a>

                        </div>
                    </div>

                                
                    <div class="xl:flex xl:items-center xl:w-3/12 hidden   ">
                        <h1 class="font-montserrat text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-lg font-medium">+420 730 681 670</h1>

                        <div class="flex flex-col ">
                            <div class="bg-gray-500 bg-gradient-to-br hover:from-purple-700 hover:to-pink-400 rounded-full my-1">
                                <a href="">
                                    <img src="{{ asset('img/socialmedia/instagram.png') }}" style="width: 30px;">
                                </a>
                            </div>
                            <div class="bg-gray-500 hover:bg-blue-700 rounded-full my-1">
                                <a href="">
                                    <img src="{{ asset('img/socialmedia/facebook.png') }}" style="width: 30px;">
                                </a>
                            </div>
                    </div>

                    </div>



                </div>

            </div>
        </div>

    <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#" class="font-montserrat text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Galerie</a>
        
                <a href="#" class="font-montserrat text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Galerie</a>
        
                <a href="#" class="font-montserrat text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Ceník</a>
        
                <a href="#" class="font-montserrat text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Kontakt</a>
            </div>
        </div>

    </nav>

    <section  >
        <x-home-content/>
    </section>






</body>

<script>
    var slideIndex = 0;
    showSlides();
    
    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
    </script>




    <script src="{{ asset('js/app.js') }}"></script>

</html>