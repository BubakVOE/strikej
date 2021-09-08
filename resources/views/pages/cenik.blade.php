@extends('layouts.app')

@section('content')
    
    <div class="flex flex-col w-10/12 m-auto ">
        <div class="align-middle inline-block min-w-full ">
            <div class="overflow-hidden rounded-lg">
                <table class="min-w-full divide-y-2 divide-gray-200">

                    <thead class="bg-gray-medium">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-center text-sm font-poppins font-medium text-white uppercase tracking-wider">
                                Typ vozu
                            </th>
                            <th scope="col" class="px-6 py-3 text-center text-sm font-poppins font-medium text-white uppercase tracking-wider">
                                Příklad
                            </th>
                            <th scope="col" class="px-6 py-3 text-center text-sm font-poppins font-medium text-white uppercase tracking-wider">
                                Nástřik dutin
                            </th>
                            <th scope="col" class="px-6 py-3 text-center text-sm font-poppins font-medium text-white uppercase tracking-wider">
                                Přezutí gum
                            </th>
                            <th scope="col" class="px-6 py-3 text-center text-sm font-poppins font-medium text-white uppercase tracking-wider">
                                vyčistění auta
                            </th>
                        </tr>
                    </thead>

                    <tbody class="bg-gray-old divide-y divide-gray-400">

                        <x-cenik-type 
                            carType='osobní auto' 
                            carExamples='Kizashi Octavia, Superb, Mondeo, Passat'
                            priceDutin='5000 kč'
                            brandDutin='Dinitrol'
                            priceGum='3200 kč'
                            priceClear='1500 kč'
                        />

                        <x-cenik-type 
                            carType='SUV' 
                            carExamples='FeelsGodMan lul lulw omegaLUl clueless'
                            priceDutin='8000 kč'
                            brandDutin='Poggers'
                            priceGum='3500 kč'
                            priceClear='2000 kč'
                        />

                        <x-cenik-type 
                            carType='osobní auto' 
                            carExamples='FeelsGodMan lul lulw omegaLUl clueless'
                            priceDutin='8000 kč'
                            brandDutin='Poggers'
                            priceGum='3500 kč'
                            priceClear='2000 kč'
                        />

                        <x-cenik-type 
                            carType='pickUp' 
                            carExamples='FeelsGodMan lul lulw omegaLUl clueless'
                            priceDutin='8000 kč'
                            brandDutin='Poggers'
                            priceGum='3500 kč'
                            priceClear='2000 kč'
                        />

                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection