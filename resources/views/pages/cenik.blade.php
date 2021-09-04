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
<body>
    
    <div class="bg-gray-old ">
        <x-home-navbar/>
    </div>

    <div class="relative h-full w-full bg-gray-medium rounded-lg p-3">

        <form action="" method="POST" class="h-full">
            @csrf
        
            <div class="text-center flex flex-col items-center justify-center ">
                <h1 class="text-xl font-bold font-poppins text-white border-b-2 border-white pb-1 mb-1">Formulář</h1>
                <h1 class="text-white">Pro příhlašení vozidla</h1> 
            </div>

            <div class="flex flex-col justify-center items-center h-11/12 ">

                <div class="h-10/12 flex flex-col justify-between">
                {{-- inputy --}}
                    <div> 
                        <div class="flex">
                            <div class="flex flex-col font-bold w-4/6 px-2">
                                <label class="mb-3 text-gray-400 ">
                                    <h1>Jméno <span class="text-red-custom text-lg">*</span></h1>
                                </label>
                                <input 
                                    type="text"
                                    name="firstName"
                                    placeholder="Pavel"
                                    class="py-2 px-5 rounded focus:outline-none text-cool-gray-600 focus:text-black-custom  "
                                    >
                            </div>
                            
                            <div class="flex flex-col font-bold w-4/6 px-2">
                                <label class="mb-3 text-gray-400 ">
                                    <h1>Příjmení <span class="text-red-custom text-lg">*</span></h1>
                                </label>
                                <input 
                                    type="text"
                                    name="lastName"
                                    placeholder="Novák"
                                    class="py-2 px-5 rounded focus:outline-none text-cool-gray-600 focus:text-black-custom  "
                                    >
                            </div>
                        </div>

                        <div class="flex justify-center items-center mt-5">
                            <div class="flex flex-col font-bold w-2/6 px-2">
                                <label class="mb-3 text-gray-400 ">
                                    <h1>telefonní číslo <span class="text-red-custom text-lg">*</span></h1>
                                </label>
                                <input 
                                    type="text"
                                    name="mobile"
                                    placeholder="730681670"
                                    class="py-2 px-5 rounded focus:outline-none text-cool-gray-600 focus:text-black-custom text-center  "
                                    >
                            </div>
                            
                            <div class="flex flex-col font-bold w-3/6 px-2">
                                <label class="mb-3 text-gray-400 flex items-center space-x-1 ">
                                    <h1>Datum </h1>
                                    <span class="text-red-custom text-lg">*</span>
                                    <h2 class="text-xs text-gray-400 font-semibold">(předběžná rezervace)</h2>
                                </label>
                                <input 
                                    type="date"
                                    name="datum"
                                    class="py-2 px-5 rounded focus:outline-none text-cool-gray-500 focus:text-black-custom text-center  "
                                    >
                            </div>
                        </div>
        
                        <div class="flex justify-center mt-5">
                            <div class="flex flex-col font-bold w-4/6 px-2">
                                <label class="mb-3 text-gray-400 ">
                                    <h1>E-mail <span class="text-red-custom text-lg">*</span></h1>
                                </label>
                                <input 
                                    type="text"
                                    name="email"
                                    placeholder="Pavelnovak@seznam.cz"
                                    class="py-2 px-5 rounded focus:outline-none text-cool-gray-600 focus:text-black-custom text-center  "
                                    >
                            </div>
                        </div>

                        <div class="flex mt-5">
                            <div class="flex flex-col font-bold w-4/6 px-2 ">

                                <div class="mb-3 text-gray-400 ">
                                    <h1>Auto <span class="text-red-custom text-lg">*</span></h1>
                                </div>

                                <input 
                                    type="text"
                                    name="car"
                                    placeholder="Škoda KodiaQ"
                                    class="py-2 px-5 rounded focus:outline-none text-cool-gray-600 focus:text-black-custom text-center  "
                                    >
                            </div>
                            
                            <div class="flex flex-col font-bold w-4/6 px-2">
                                <div class="mb-3 text-gray-400 ">
                                    <h1>Typ <span class="text-red-custom text-lg">*</span></h1>
                                </div>
                        
                                <select name="type" class="py-2 px-5 rounded focus:outline-none text-black-custom ">
                                    <option value="private">Osobní</option>
                                    <option value="suv">SUV</option>
                                    <option value="off-road">off-road</option>
                                    <option value="dodavka">dodavka</option>
                                </select>
                                
                            </div>

                        </div>
                    </div>
                {{-- button --}}
                    <div class="text-center relative ">
                        @if (session()->has('message'))
                            <div class="absolute -bottom-10 left-1/2 transform -translate-x-1/2">
                                <h1 class="text-gray-50 bg-green-500 rounded-2xl py-1 px-2">
                                    {{ session()->get('message') }}
                                </h1>
                            </div>
                        
                        @else
                            <button type="submit" class="px-8 py-3  border-transparent text-base font-medium rounded-md text-black-custom bg-red-custom border-2 border-gray-old hover:bg-black-custom hover:border-black-custom hover:text-red-custom md:py-4 md:text-lg md:px-10 transition duration-300">
                                Odeslat
                            </button>
                        @endif
                    </div>
                </div>

            </div>



            <div class="text-center relative ">
                @if ($errors->any())
                    <div >
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

        </form>
    </div>

</body>
</html>