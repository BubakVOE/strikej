<tr>
    <td class="px-6 py-4 whitespace-nowrap text-center">
        @if ($carType == 'osobní auto')
            
            <span class="px-2 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                {{ $carType }}
            </span>

        @elseif ($carType = 'SUV')
            <span class="px-2 inline-flex text-sm leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                {{ $carType }}
            </span>
        
        @elseif($carType = 'pickUp')
            <span class="px-2 inline-flex text-sm leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                {{ $carType }}
            </span>
        @else
            neznámo

        @endif
    </td>

    <td class="px-6 py-4 whitespace-nowrap text-center">
        <div class="text-sm text-gray-200">
           {{ $carExamples }}                                
        </div>
    </td>

    <td class="px-6 py-4 whitespace-nowrap text-center">
        <div class="text-sm text-gray-200">
            {{ $priceDutin }}
        </div>

        <div class="text-sm text-gray-500">
            {{ $brandDutin }}
        </div>
    </td>

    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-200 text-center">
        {{ $priceGum }}
    </td>

    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-200 text-center">
        {{ $priceClear }}
    </td>
</tr>