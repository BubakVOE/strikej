<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;700&display=swap" rel="stylesheet">
    
</head>
<body class="bg-gray-light ">
    
    <div>
        <x-home-navbar/>
    </div>


    <section class="p-2 xl:my-1/12 space-y-2 xl:space-y-10">

        <div class="lg:w-10/12 m-auto flex items-center ">
            <div class="py-16 px-4 sm:py-24 sm:px-6 lg:px-8 w-full bg-gray-medium rounded-md">
                <h2 class="text-2xl font-extrabold tracking-tight text-white font-poppins border-b-2 border-white">2021</h2>
            
                <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                    
                    <x-galerie-car/>
                    <x-galerie-car/>
                    <x-galerie-car/>
                    <x-galerie-car/>
                    <x-galerie-car/>
            
                </div>
            </div>
        </div>


        

    
    </section>



    <x-footer/>




</body>
</html>