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
<body class="bg-gray-light h-screen ">

    <div class="bg-gray-old ">
        <x-home-navbar/>
    </div>



    <div class="h-11/12 w-11/12 lg:w-10/12 mx-auto flex items-center">
        <div class="flex justify-between items-center flex-col h-10/12 w-full xl:flex-row xl:space-x-2  ">
        {{-- servis --}}
            <div class="relative h-full w-full xl:w-6/12 bg-gray-medium rounded-lg p-3">
                <div class="text-center flex justify-center xl:justify-start space-x-2 p-2">
                    <h1 class="text-xl font-bold font-poppins text-white border-b-2 border-white w-16 ">Servis</h1>
                </div>
                                 
                <div class="flex justify-center my-4 xl:my-10  ">
                    <img class="w-24 lg:w-2/12 xl:w-8/12" src="{{ asset('img/kontakt/location.png') }}" >
                </div>

                <div class="flex flex-col justify-center items-center">
                    <div>
                        <h1 class="text-lg text-red-custom font-bold">Provozovna</h1>
                    </div>
                    
                    <div class="w-32 lg:w-4/12 xl:w-10/12">
                        <img class="" src="{{ asset('img/kontakt/adresa.png') }}" alt="">
                    </div>

                    <div class="flex flex-col justify-center items-center pt-5">
                        <h1 class="text-gray-300 underline"><a target="on_blank" href="https://www.google.com/maps/place/Bablerovo+n%C3%A1m.+19%2F4,+779+00+Samoti%C5%A1ky/@49.6322502,17.3281038,557m/data=!3m1!1e3!4m5!3m4!1s0x47124bee350c6adf:0xd55350258e71df68!8m2!3d49.632589!4d17.327837!5m1!1e4?hl=cs-CZ">Báblerovo náměstí 19/4</a></h1>
                        <h1 class="font-poppins text-lg text-gray-200">Olomouc - Samotišky</h1>
                    </div>
                </div>
            </div>

        {{-- formulář --}}

            <div class="flex justify-center w-full xl:h-full bg-gray-medium rounded-lg p-3">
                <div class=" md:mt-0 md:col-span-2 ">

                    <div class="text-center flex flex-col items-center justify-center ">
                        <h1 class="text-xl font-bold font-poppins text-white border-b-2 border-white pb-1 mb-1">Formulář</h1>
                        <h1 class="text-white">Pro příhlašení vozidla</h1> 
                    </div>

                    <form  action="#" method="POST" class="overflow-hidden sm:rounded-md ">

                        @csrf

                        <div class="px-4  sm:p-6 ">
                            <div class="grid grid-cols-6 justify-items-center gap-6 my-16 ">
                                <div class="col-span-6 sm:col-span-3 w-full">
                                    <label for="firstName" class="block text-sm xl:text-base font-bold text-gray-400">
                                        <h1>Jméno <span class="text-red-custom text-lg">*</span></h1>
                                    </label>
                                    <input  type="text" 
                                            name="firstName" 
                                            id="firstName" 
                                            autocomplete="given-name" 
                                            placeholder="Petr"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block lg:w-11/12 m-auto sm:text-sm border-gray-300 rounded-md">
                                            
                                </div>
                
                                <div class="col-span-6 sm:col-span-3 w-full">
                                    <label for="lastName" class="block text-sm xl:text-base font-bold text-gray-400">
                                        <h1>Příjmení <span class="text-red-custom text-lg">*</span></h1>
                                    </label>
                                    <input type="text" 
                                            name="lastName" 
                                            id="lastName" 
                                            autocomplete="family-name" 
                                            placeholder="Novák"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block lg:w-11/12 m-auto sm:text-sm border-gray-300 rounded-md">
                                </div>
                
                                <div class="col-span-6 sm:col-span-6 lg:w-8/12 ">
                                    <label for="email" class="block text-sm xl:text-base font-bold text-gray-400">
                                        <h1>E-mail <span class="text-red-custom text-lg">*</span></h1>
                                    </label>
                                    <input type="text" 
                                            name="email" 
                                            id="email" 
                                            autocomplete="email" 
                                            placeholder="petrnovak@seznam.cz"
                                            class="mt-1 focus:ring-indigo-500 lg:text-center focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                </div>
                                            
                                <div class="col-span-6 sm:col-span-6 w-8/12">
                                    <label for="phone" class="block text-sm xl:text-base font-bold text-gray-400">
                                        <h1>telefonní číslo <span class="text-red-custom text-lg">*</span></h1>
                                    </label>
                                    <input type="text" 
                                    name="phone" 
                                    id="phone" 
                                    autocomplete="phone"
                                    placeholder="730681670" 
                                    class="mt-1 focus:ring-indigo-500 lg:text-center focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
    
                                </div>

                
                                <div class="col-span-6 sm:col-span-6 lg:col-span-3">
                                    <label for="car" class="block text-sm xl:text-base font-bold text-gray-400">
                                        <h1>Auto <span class="text-red-custom text-lg">*</span></h1>
                                    </label>
                                    <input  type="text" 
                                            name="car" 
                                            id="car" 
                                            placeholder="Škoda kodiaQ"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                </div>

                
                                <div class="col-span-6 sm:col-span-6 lg:col-span-3 w-full">
                                    <label for="type" class="block text-sm xl:text-base font-bold text-gray-400">
                                        <h1>Typ <span class="text-red-custom text-lg">*</span></h1>
                                    </label>
                                    <select id="type" 
                                            name="type" 
                                            class="mt-1 w-full block py-2 px-3 border border-gray-300 bg-white rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option value="osobni">Osobní</option>
                                        <option value="suv">SUV</option>
                                        <option value="off-road">Off-road</option>
                                        <option value="pickup">Pickup</option>
                                    </select>                            
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="py-2 px-4 border-transparent text-base font-medium rounded-md text-black-custom bg-red-custom border-2  hover:bg-black-custom hover:border-black-custom hover:text-red-custom md:py-4 md:text-lg md:px-10 transition duration-300">
                                Odeslat
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        {{-- kontakty & informace --}}
            <div class="relative h-full w-full xl:w-6/12 bg-gray-medium rounded-lg p-3">
                <div class="text-center flex justify-center xl:justify-end space-x-2 p-2">
                    <h1 class="text-xl font-bold font-poppins text-white border-b-2 border-white">Kontakt</h1>
                    <h1 class="text-xl font-bold font-poppins text-white ">&</h1>
                    <h1 class="text-xl font-bold font-poppins text-white border-b-2 border-white">informace</h1>
                </div>

                <div class="flex justify-center my-4 xl:my-10  ">
                    <img class="w-24 lg:w-2/12 xl:w-8/12" src="{{ asset('img/kontakt/information.png') }}" >
                </div>

                <div class="flex flex-col justify-evenly space-y-4   ">

                    <div class="flex flex-col justify-center items-center space-y-2 ">
                        <div class="flex flex-col justify-center items-center">
                            <h1 class="text-lg text-red-custom font-bold">Telefonní číslo</h1>
                            <h1 class="text-white">+420 777 092 381</h1>
                        </div>
        
                        <div class="flex flex-col justify-center items-center">
                            <h1 class="text-lg text-red-custom font-bold">E-mail</h1>
                            <h1 class="text-white">ludwigjiri@seznam.cz</h1>
                        </div>
                    </div>

                    <div class="flex flex-col justify-center items-center space-y-2">
                        <div class="flex flex-col justify-center items-center ">
                            <h1 class="text-lg text-red-custom font-bold">IČO</h1>
                            <h1 class="text-gray-300">63681927</h1>
                        </div>
        
                        <div class="flex flex-col justify-center items-center ">
                            <h1 class="text-lg text-red-custom font-bold">DIČ</h1>
                            <h1 class="text-gray-300">CZ7408235307</h1>
                        </div>
                        
                        <div class="flex flex-col justify-center items-center ">
                            <h1 class="text-lg text-red-custom font-bold">Zaregistrován v</h1>
                            <h1 class="text-gray-300">Magitrátu města Olomouce</h1>
                        </div>
                    </div>
                </div>  

            </div>
        </div>
    </div>



</body>
</html>