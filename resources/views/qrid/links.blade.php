<x-guest-layout>
    <div class="py-10">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <ul class="grid lg:grid-cols-2 gap-4 sm:grid-cols-2 mt-2">
                @foreach ($links as $link)
                    <li>
                        <a href="{{ $link['url'] }}"
                            class="p-4 mb-2 max-w-fit mx-auto rounded-xl shadow-lg flex items-center bg-white hover:bg-gray-100">
                            <div class="mr-5 text-gray-800">
                                <i class="{{ $link['icon'] }} text-xl"></i>
                            </div>
                            <div>

                                <div class="text-xl font-medium text-gray-700">{{ $link['label'] }}</div>
                                <p class="text-gray-400 text-xs">{{ $link['description'] }}</p>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    

        <div class="flex flex-col items-center justify-center bg-white">
            <x-card-stratego-emp></x-card-stratego-emp>
        </div>


        <div class="h-30 flex flex-row flex-wrap items-center justify-center align-middle gap-2">

            <a
                href="https://open.spotify.com/show/3W8QNV54kQqG0p78gsMlRd?si=2VSseuqCQdiqgFLMGXcjyQ&dl_branch=1&fbclid=IwAR1v8oUUwzigk35VxNJ4Go3jVCGNU0IAF1r4UOoJBzOE5Kw-BQbNLfVCBgA&nd=1">

                <div class="h-11 px-4 rounded-lg bg-green-500 flex items-center hover:bg-green-600">
                    <i class="fa-brands fa-spotify text-white p-2"></i>
                    <p class="text-white text-sm pr-1">Spotify</p>
                </div>
            </a>

            <a href="https://id3.didacte.com/">
                <div class="h-11 px-4 rounded-lg bg-gray-700  hover:bg-gray-800 flex items-center">
                    <i class="fa-solid fa-ticket text-white p-2"></i>
                    <p class="text-white text-sm pr-1">Formation UFC</p>
                </div>
            </a>

            <a href="https://youtube.com">
                <div class="h-11 px-4 rounded-lg bg-red-600  hover:bg-red-700 flex items-center">
                    <i class="fa-brands fa-youtube text-white p-2"></i>
                    <p class="text-white text-sm pr-1">YouTube</p>
                </div>
            </a>

            <a href="https://lestudio.id-3.net/">
                <div class="h-11 px-4 rounded-lg bg-blue-300  hover:bg-blue-400 flex items-center">
                    <i class="fa-solid fa-video text-white p-2"></i>
                    <p class="text-white text-sm pr-1">Le Studio</p>
                </div>
            </a>
        </div>

        <a href="https://id-3.net">
            <div class="flex flex-row justify-center items-center p-2 w-24 h-24">
                <x-application-id3></x-application-id3>
            </div>
        </a>
    </div>
</x-guest-layout>
