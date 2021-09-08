@extends('layouts.app')

@section('content')

    <div class="w-11/12 lg:w-10/12 mx-auto flex items-center">
        <div class="flex justify-between items-center flex-col h-10/12  w-full xl:flex-row space-y-4 my-4 xl:my-0 xl:space-y-0 xl:space-x-2  ">
        {{-- servis --}}
            <div class=" h-full w-full xl:w-6/12 bg-gray-medium rounded-lg p-3 ">
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
            <div class="flex justify-center w-full bg-gray-medium rounded-lg p-3">
                <div class="md:mt-0 md:col-span-2 ">

                    <div class="text-center flex flex-col items-center justify-center ">
                        <h1 class="text-xl font-bold font-poppins text-white border-b-2 border-white pb-1 mb-1">Formulář</h1>
                        <h1 class="text-white">Pro příhlašení vozidla</h1> 
                    </div>

                    <form  action="{{ route('reservation') }}" method="POST" class="overflow-hidden sm:rounded-md ">

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
                                            required
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
                                            required
                                            placeholder="Novák"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block lg:w-11/12 m-auto sm:text-sm border-gray-300 rounded-md
                                            @error('lastName')  @enderror
                                            ">
                                </div>
                
                                <div class="col-span-6 sm:col-span-6 lg:w-8/12 ">
                                    <label for="email" class="block text-sm xl:text-base font-bold text-gray-400">
                                        <h1>E-mail <span class="text-red-custom text-lg">*</span></h1>
                                    </label>
                                    <input type="text" 
                                            name="email" 
                                            id="email" 
                                            autocomplete="email" 
                                            required
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
                                            required
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
                                            required
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

                        <div class="text-center relative ">


                            @if (session()->has('message'))
                                <div class="absolute -bottom-10 left-1/2 transform -translate-x-1/2">
                                    <h1 class="text-gray-50 bg-green-500 rounded-2xl py-1 px-2">
                                        {{ session()->get('message') }}
                                    </h1>
                                </div>
                            
                            @else
                                <div class="text-center">
                                    <button type="submit" class="py-1 px-4 text-base font-medium rounded-md text-black-custom bg-red-custom hover:bg-black-custom hover:text-red-custom md:py-4 md:text-lg md:px-10 transition duration-300">
                                        Odeslat
                                    </button>
                                </div>
                            @endif


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

                        {{-- <div class="text-center">
                            <button type="submit" class="py-2 px-4 border-transparent text-base font-medium rounded-md text-black-custom bg-red-custom border-2  hover:bg-black-custom hover:border-black-custom hover:text-red-custom md:py-4 md:text-lg md:px-10 transition duration-300">
                                Odeslat
                            </button>
                        </div> --}}

                    </form>
                </div>
            </div>

        {{-- kontakty & informace --}}
            <div class=" h-full w-full xl:w-6/12 bg-gray-medium rounded-lg p-3">
                <div class="text-center flex justify-center xl:justify-end space-x-2 p-2">
                    <h1 class="text-xl font-bold font-poppins text-white border-b-2 border-white">Kontakt</h1>
                    <h1 class="text-xl font-bold font-poppins text-white ">&</h1>
                    <h1 class="text-xl font-bold font-poppins text-white border-b-2 border-white">informace</h1>
                </div>

                <div class="flex justify-center my-4 xl:my-10  ">
                    <img class="w-24 lg:w-2/12 xl:w-8/12" src="{{ asset('img/kontakt/information.png') }}" >
                </div>

                <div class="flex flex-col justify-evenly ">

                    <div class="flex flex-col justify-center items-center ">
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

@endsection