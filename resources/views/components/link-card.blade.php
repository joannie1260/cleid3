@props(['class', 'title', 'text', 'href'])

<section class="px-4">
    <div class="{{ $class }}">
        <div class="flex flex-col gap-6">
            <div class="">
                <span class="text-gray-200">{{ $title }}</span>
                <br>
                <span class="text-4xl text-white font-semibold">{{ $text }}</span>
            </div>
            <a href="{{ $href }}" target="_blank" rel="noreferrer"
                class="text-black bg-white hover:bg-gray-50 px-4 py-2 rounded-lg w-fit ease duration-300 flex gap-1 items-center group">
                <span>Accéder à ma carte QR</span>

                <svg data-v-e660a7a7="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    aria-hidden="true" role="img"
                    class="group-hover:translate-x-1 transition-transform ease duration-200" width="1em"
                    height="1em" viewBox="0 0 256 256">
                    <path fill="currentColor"
                        d="m221.66 133.66l-72 72a8 8 0 0 1-11.32-11.32L196.69 136H40a8 8 0 0 1 0-16h156.69l-58.35-58.34a8 8 0 0 1 11.32-11.32l72 72a8 8 0 0 1 0 11.32Z">
                    </path>
                </svg>
            </a>
        </div>
        <div>
            <i class="fa-solid fa-qrcode text-2xl w-10 h-10"></i>
        </div>
    </div>
</section>
