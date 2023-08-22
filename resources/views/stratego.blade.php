<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Stratego</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="/dist/output.css" rel="stylesheet">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::-webkit-backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .relative {
            position: relative
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mx-6 {
            margin-left: 1.5rem;
            margin-right: 1.5rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-16 {
            margin-top: 4rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .mr-1 {
            margin-right: 0.25rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .grid {
            display: grid
        }

        .h-16 {
            height: 4rem
        }

        .h-7 {
            height: 1.75rem
        }

        .h-6 {
            height: 1.5rem
        }

        .h-5 {
            height: 1.25rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-auto {
            width: auto
        }

        .w-16 {
            width: 4rem
        }

        .w-7 {
            width: 1.75rem
        }

        .w-6 {
            width: 1.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .max-w-7xl {
            max-width: 80rem
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .gap-6 {
            gap: 1.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .self-center {
            align-self: center
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }


        .bg-black {
            --tw-bg-opacity: 1;
            background-color:(#4b5563/ var(--tw-bg-opacity))
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity))
        }

        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
        }

        .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5);
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
        }

        .bg-center {
            background-position: center
        }

        .stroke-red-500 {
            stroke: #ef4444
        }

        .stroke-gray-400 {
            stroke: #9ca3af
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-relaxed {
            line-height: 1.625
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored)
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .focus\:rounded-sm:focus {
            border-radius: 0.125rem
        }

        .focus\:outline:focus {
            outline-style: solid
        }

        .focus\:outline-2:focus {
            outline-width: 2px
        }

        .focus\:outline-red-500:focus {
            outline-color: #ef4444
        }

        .group:hover .group-hover\:stroke-gray-600 {
            stroke: #4b5563
        }

        .z-10 {
            z-index: 10
        }

        @media (prefers-reduced-motion: no-preference) {
            .motion-safe\:hover\:scale-\[1\.01\]:hover {
                --tw-scale-x: 1.01;
                --tw-scale-y: 1.01;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-800\/50 {
                background-color: rgb(31 41 55 / 0.5)
            }

            .dark\:bg-red-800\/20 {
                background-color: rgb(153 27 27 / 0.2)
            }

            .dark\:bg-dots-lighter {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
            }

            .dark\:bg-gradient-to-bl {
                background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
            }

            .dark\:stroke-gray-600 {
                stroke: #4b5563
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:shadow-none {
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .dark\:ring-inset {
                --tw-ring-inset: inset
            }

            .dark\:ring-white\/5 {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .group:hover .dark\:group-hover\:stroke-gray-400 {
                stroke: #9ca3af
            }
        }

        @media (min-width: 640px) {
            .sm\:fixed {
                position: fixed
            }

            .sm\:top-0 {
                top: 0px
            }

            .sm\:right-0 {
                right: 0px
            }

            .sm\:ml-0 {
                margin-left: 0px
            }

            .sm\:flex {
                display: flex
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-center {
                justify-content: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-8 {
                padding: 2rem
            }
        }
    </style>

</head>

<body class="antialiased">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-black-100 dark:bg-dots-lighter dark:bg-black-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Portail ID-3</a>

                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Connexion
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" 
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nouvel
                            utilisateur</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="350" zoomAndPan="magnify" viewBox="0 0 262.5 74.999997" height="100" preserveAspectRatio="xMidYMid meet" version="1.0"><defs><clipPath id="f2e6fd5b87"><path d="M 20.125 22 L 30 22 L 30 40 L 20.125 40 Z M 20.125 22 " clip-rule="nonzero"/></clipPath><clipPath id="8cb369f068"><path d="M 22 48 L 39 48 L 39 52.796875 L 22 52.796875 Z M 22 48 " clip-rule="nonzero"/></clipPath><clipPath id="5db20d81d2"><path d="M 24 19.796875 L 43 19.796875 L 43 49 L 24 49 Z M 24 19.796875 " clip-rule="nonzero"/></clipPath></defs><g clip-path="url(#f2e6fd5b87)"><path fill="#000000" d="M 24.078125 33.527344 L 24.742188 28.925781 L 28.117188 25.261719 L 28.785156 26.378906 L 29.71875 22.402344 L 24.65625 22.402344 L 26.652344 23.296875 C 26.652344 23.296875 23.5 25.441406 23.144531 25.886719 C 22.789062 26.335938 20.257812 31.023438 20.257812 31.023438 L 21.546875 30.308594 L 21.148438 33.082031 L 21.769531 32.277344 L 22.078125 35.269531 L 29.539062 39.511719 Z M 24.078125 33.527344 " fill-opacity="1" fill-rule="nonzero"/></g><g clip-path="url(#8cb369f068)"><path fill="#00000" d="M 36.421875 50.28125 L 37.265625 48.3125 L 23.5 49.519531 L 23.5 50.28125 L 22.035156 50.28125 L 22.035156 52.648438 L 38.640625 52.648438 L 38.640625 50.28125 Z M 36.421875 50.28125 " fill-opacity="1" fill-rule="nonzero"/></g><g clip-path="url(#5db20d81d2)"><path fill="#00000" d="M 24.789062 48.851562 C 28.429688 48.316406 36.15625 47.597656 36.15625 47.597656 L 37.753906 46.035156 C 37.753906 46.035156 39.886719 43.445312 40.019531 42.996094 C 40.152344 42.550781 39.484375 38.082031 39.484375 38.082031 C 39.484375 38.082031 34.246094 32.632812 31.402344 29.996094 L 34.957031 32.589844 L 40.730469 32.722656 C 41.527344 32.050781 42.148438 31.160156 42.460938 30.175781 L 33.222656 22.089844 L 33.222656 22.046875 L 33.492188 19.945312 L 29.496094 21.957031 L 30.339844 21.957031 L 29.050781 27.539062 L 28.074219 26.109375 L 25.320312 29.195312 L 24.65625 33.4375 C 26.652344 35.582031 29.984375 39.289062 30.828125 40.273438 C 31.671875 41.253906 31.269531 43.398438 30.828125 43.757812 C 30.292969 44.113281 26.875 45.902344 24.832031 47.0625 Z M 24.789062 48.851562 " fill-opacity="1" fill-rule="nonzero"/></g><path fill="#00000" d="M 64.210938 28.355469 C 63.097656 28.074219 62.167969 27.886719 61.144531 27.886719 C 59.660156 27.886719 58.542969 28.167969 57.707031 28.820312 C 56.871094 29.570312 56.40625 30.410156 56.40625 31.535156 C 56.40625 32.65625 56.871094 33.496094 57.890625 34.246094 C 58.914062 34.992188 60.308594 35.648438 62.167969 36.300781 C 63.5625 36.769531 64.675781 37.332031 65.605469 37.890625 C 66.535156 38.453125 67.371094 39.292969 67.929688 40.320312 C 68.578125 41.351562 68.859375 42.660156 68.859375 44.25 C 68.859375 45.652344 68.488281 46.960938 67.835938 48.082031 C 67.09375 49.203125 66.164062 50.140625 64.769531 50.792969 C 63.46875 51.449219 61.886719 51.824219 60.214844 51.824219 C 58.542969 51.824219 56.964844 51.542969 55.476562 51.074219 C 53.988281 50.515625 52.59375 49.859375 51.480469 49.109375 L 53.058594 46.304688 C 53.988281 46.960938 55.011719 47.613281 56.3125 48.082031 C 57.613281 48.550781 58.730469 48.832031 59.84375 48.832031 C 61.238281 48.832031 62.539062 48.457031 63.5625 47.707031 C 64.582031 46.960938 65.140625 45.839844 65.140625 44.4375 C 65.140625 43.222656 64.675781 42.191406 63.839844 41.539062 C 62.910156 40.789062 61.703125 40.136719 60.121094 39.480469 C 58.636719 38.917969 57.429688 38.359375 56.40625 37.796875 C 55.382812 37.238281 54.546875 36.488281 53.894531 35.554688 C 53.152344 34.617188 52.875 33.402344 52.875 32 C 52.875 29.945312 53.617188 28.261719 55.011719 26.953125 C 56.40625 25.457031 58.265625 24.800781 60.585938 24.707031 C 63.46875 24.707031 66.070312 25.457031 68.578125 26.859375 L 67.1875 29.664062 C 66.257812 29.101562 65.234375 28.726562 64.210938 28.355469 Z M 64.210938 28.355469 " fill-opacity="1" fill-rule="nonzero"/><path fill="#00000" d="M 90.324219 24.894531 L 90.324219 28.355469 L 83.261719 28.355469 L 83.261719 51.542969 L 79.730469 51.542969 L 79.730469 28.261719 L 72.761719 28.261719 L 72.761719 24.894531 Z M 90.324219 24.894531 " fill-opacity="1" fill-rule="nonzero"/><path fill="#00000" d="M 159.375 24.894531 L 159.375 28.355469 L 152.3125 28.355469 L 152.3125 51.542969 L 148.78125 51.542969 L 148.78125 28.261719 L 141.808594 28.261719 L 141.808594 24.894531 Z M 159.375 24.894531 " fill-opacity="1" fill-rule="nonzero"/><path fill="#00000" d="M 205.933594 50.980469 C 204.167969 51.542969 202.585938 51.824219 201.195312 51.824219 C 198.40625 51.824219 195.988281 51.261719 193.945312 50.140625 C 191.808594 49.019531 190.226562 47.429688 189.113281 45.464844 C 187.996094 43.5 187.441406 41.257812 187.441406 38.734375 C 187.441406 35.835938 188.089844 33.308594 189.296875 31.160156 C 190.507812 29.007812 192.179688 27.417969 194.222656 26.296875 C 196.269531 25.175781 198.589844 24.613281 201.007812 24.613281 C 202.496094 24.613281 203.890625 24.800781 205.191406 25.175781 C 206.492188 25.550781 207.699219 26.015625 208.722656 26.578125 L 207.511719 29.851562 C 206.769531 29.382812 205.746094 29.007812 204.539062 28.726562 C 203.332031 28.355469 202.308594 28.261719 201.378906 28.261719 C 199.335938 28.261719 197.476562 28.632812 195.898438 29.476562 C 194.316406 30.316406 193.109375 31.535156 192.273438 33.027344 C 191.4375 34.617188 190.972656 36.394531 190.972656 38.453125 C 190.972656 40.414062 191.4375 42.097656 192.273438 43.59375 C 193.109375 45.089844 194.316406 46.210938 195.898438 47.054688 C 197.476562 47.894531 199.242188 48.269531 201.285156 48.269531 C 202.214844 48.269531 203.144531 48.175781 203.980469 47.988281 C 204.816406 47.800781 205.5625 47.523438 206.210938 47.242188 L 206.210938 42.003906 L 200.914062 42.003906 L 200.914062 38.546875 L 209.742188 38.546875 L 209.742188 49.296875 C 209 49.859375 207.699219 50.515625 205.933594 50.980469 Z M 205.933594 50.980469 " fill-opacity="1" fill-rule="nonzero"/><path fill="#00000" d="M 216.714844 31.441406 C 217.921875 29.382812 219.59375 27.699219 221.640625 26.484375 C 223.683594 25.269531 225.914062 24.613281 228.421875 24.613281 C 230.839844 24.613281 233.070312 25.269531 235.207031 26.484375 C 237.25 27.699219 238.925781 29.382812 240.132812 31.441406 C 241.339844 33.496094 241.992188 35.835938 241.992188 38.265625 C 241.992188 40.695312 241.339844 43.035156 240.132812 45.089844 C 238.925781 47.148438 237.25 48.832031 235.207031 50.046875 C 233.164062 51.261719 230.839844 51.917969 228.421875 51.917969 C 226.007812 51.917969 223.683594 51.355469 221.640625 50.140625 C 219.59375 48.925781 217.921875 47.335938 216.714844 45.183594 C 215.503906 43.128906 214.855469 40.789062 214.855469 38.265625 C 214.855469 35.835938 215.503906 33.496094 216.714844 31.441406 Z M 219.875 43.3125 C 220.710938 44.902344 221.917969 46.121094 223.496094 46.960938 C 224.984375 47.894531 226.65625 48.363281 228.515625 48.363281 C 230.28125 48.363281 231.953125 47.894531 233.441406 47.054688 C 234.929688 46.121094 236.136719 44.902344 236.972656 43.40625 C 237.808594 41.816406 238.273438 40.136719 238.273438 38.265625 C 238.273438 36.394531 237.808594 34.710938 236.972656 33.121094 C 236.136719 31.535156 234.929688 30.316406 233.347656 29.382812 C 231.863281 28.449219 230.1875 27.980469 228.328125 27.980469 C 226.5625 27.980469 224.890625 28.449219 223.3125 29.382812 C 221.824219 30.316406 220.617188 31.535156 219.78125 33.121094 C 218.945312 34.710938 218.480469 36.394531 218.480469 38.265625 C 218.570312 40.042969 219.035156 41.726562 219.875 43.3125 Z M 219.875 43.3125 " fill-opacity="1" fill-rule="nonzero"/><path fill="#00000" d="M 129.355469 23.773438 L 129.078125 23.773438 L 117.554688 51.542969 L 120.992188 51.542969 L 129.078125 31.71875 L 136.792969 51.542969 L 140.882812 51.542969 Z M 129.355469 23.773438 " fill-opacity="1" fill-rule="nonzero"/><path fill="#00000" d="M 166.34375 36.394531 L 178.332031 36.394531 L 178.332031 39.855469 L 166.34375 39.855469 Z M 166.34375 36.394531 " fill-opacity="1" fill-rule="nonzero"/><path fill="#00000" d="M 166.34375 24.894531 L 179.820312 24.894531 L 179.820312 28.355469 L 166.34375 28.355469 Z M 166.34375 24.894531 " fill-opacity="1" fill-rule="nonzero"/><path fill="#00000" d="M 166.34375 48.082031 L 180.378906 48.082031 L 180.378906 51.542969 L 166.34375 51.542969 Z M 166.34375 48.082031 " fill-opacity="1" fill-rule="nonzero"/><path fill="#00000" d="M 108.074219 40.789062 C 109.5625 40.042969 110.679688 39.011719 111.421875 37.609375 C 112.164062 36.207031 112.535156 34.710938 112.535156 33.121094 C 112.535156 31.347656 112.164062 29.851562 111.328125 28.632812 C 110.492188 27.417969 109.375 26.484375 107.984375 25.828125 C 106.589844 25.175781 104.917969 24.894531 103.152344 24.894531 L 96.085938 24.894531 L 96.085938 51.542969 L 99.617188 51.542969 L 99.617188 28.261719 L 103.707031 28.261719 C 104.917969 28.261719 105.84375 28.542969 106.589844 29.007812 C 107.332031 29.476562 107.890625 30.128906 108.261719 30.878906 C 108.632812 31.625 108.820312 32.375 108.820312 33.214844 C 108.820312 34.523438 108.355469 35.648438 107.519531 36.675781 C 106.683594 37.703125 105.289062 38.171875 103.429688 38.171875 L 102.40625 38.171875 L 110.585938 51.449219 L 114.765625 51.449219 Z M 108.074219 40.789062 " fill-opacity="1" fill-rule="nonzero"/></svg>
            </div>
            <div class="mt-4">
                <div class="grid grid-cols-1 md:grid-cols-1 gap-6 lg:gap-8">
                    <div class="scale-100 p-6 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>


                            <h2 class="mt-4 text-xl font-semibold text-gray-900 dark:text-gray">Qu'est-ce que Stratego?
                            </h2>

                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Recevez des prospects chaque jour directement sur votre cellulaire via SMS. De la
                                gestion de contenu en passant par le marketing courriel jusqu'à la maturation du
                                prospect.
                            </p>
                            
                        </div>
                    </div>

                <x-video-stratego></x-video-stratego>
                <x-rdv-gray></x-rdv-gray>

                </div>
            </div>

            <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                    <div class="flex items-center gap-4">
                        <a href="https://id-3.net"
                            class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5"
                                class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                            ID-3 Technologies
                        </a>
                    </div>
                </div>

                <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                    Cle ID-3 v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div>
            </div>
        </div>
    </div>
</body>

</html>
