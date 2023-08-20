<x-guest-layout>

    <div class="flex justify-center m- sm:items-center sm:justify-between">
    {{-- <div class="grid grid-cols-3 md:grid-cols-1 gap-6 lg:gap-8"> --}}
        <ul class="flex flex-col">
            @foreach ($links as $link)
                <li>
                    <a href="{{ $link['url'] }}"
                        class="p-4 max-w-fit mx-auto rounded-xl shadow-lg flex items-center">
                        <div class="mr-5 text-blue-100">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1.5em"  viewBox="0 0 512 512">
                                <path d="{{ $link['svg'] }}"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-xl font-medium text-gray-600">{{ $link['label'] }}</div>
                            <p class="text-gray-300">{{ $link['description'] }}</p>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>


</x-guest-layout>
