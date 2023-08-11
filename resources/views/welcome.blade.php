<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Stratego</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter light:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-black focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-left">
                   <!-- Logo Stratego   -->
                    <svg version="1.1" id="stratego_00000038397957946183920490000014749592469583967890_"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="312px" height="60px" margin="15px"
                    viewBox="0 0 812 120" style="enable-background:new 0 0 812 120;" xml:space="preserve">
                    <g>
                    <g id="Layer_2">
                    <g id="_624x349">
                        <path d="M14.358,49.928l2.437-16.733l12.346-13.321l2.437,4.061l3.412-14.458h-18.52l7.31,3.249c0,0-11.534,7.798-12.834,9.422
                            S0.387,40.83,0.387,40.83l4.711-2.599L3.636,48.303l2.274-2.924l1.137,10.884l27.292,15.433L14.358,49.928z"/>
                        <polygon points="59.52,110.848 62.606,103.7 12.246,108.086 12.246,110.848 6.885,110.848 6.885,119.458 67.642,119.458 
                            67.642,110.848 			"/>
                        <path d="M16.957,105.65c13.321-1.949,41.588-4.549,41.588-4.549l5.848-5.686c0,0,7.798-9.422,8.285-11.047
                            c0.487-1.625-1.949-17.87-1.949-17.87S51.56,46.679,41.162,37.094l12.996,9.422l21.119,0.487c2.924-2.437,5.199-5.686,6.336-9.26
                            L47.823,8.34V8.177l0.975-7.635l-14.621,7.31h3.087l-4.711,20.307l-3.574-5.199L18.906,34.17l-2.437,15.433
                            c7.31,7.798,19.494,21.281,22.581,24.855s1.625,11.372,0,12.671c-1.949,1.3-14.458,7.798-21.931,12.022L16.957,105.65z"/>
                    </g>
                    </g>
                    <g id="stratego">
                    <path d="M161.193,31.118c-4.08-1.02-7.48-1.7-11.22-1.7c-5.44,0-9.52,1.02-12.58,3.4c-3.06,2.72-4.76,5.78-4.76,9.86
                        s1.7,7.14,5.44,9.86c3.74,2.72,8.84,5.1,15.64,7.48c5.1,1.7,9.18,3.74,12.58,5.78c3.4,2.04,6.46,5.1,8.5,8.84
                        c2.38,3.74,3.4,8.5,3.4,14.28c0,5.1-1.36,9.86-3.74,13.94c-2.72,4.08-6.12,7.48-11.22,9.86c-4.76,2.38-10.54,3.74-16.66,3.74
                        c-6.12,0-11.9-1.02-17.34-2.72c-5.44-2.04-10.54-4.42-14.62-7.14l5.78-10.2c3.4,2.38,7.14,4.76,11.9,6.46
                        c4.76,1.7,8.84,2.72,12.92,2.72c5.1,0,9.86-1.36,13.6-4.08c3.74-2.72,5.78-6.8,5.78-11.9c0-4.42-1.7-8.16-4.76-10.54
                        c-3.4-2.72-7.82-5.1-13.6-7.48c-5.44-2.04-9.86-4.08-13.6-6.12c-3.74-2.04-6.8-4.76-9.18-8.16c-2.72-3.4-3.74-7.82-3.74-12.92
                        c0-7.48,2.72-13.6,7.82-18.36c5.1-5.44,11.9-7.82,20.4-8.16c10.54,0,20.06,2.72,29.24,7.82l-5.1,10.2
                        C168.673,33.838,164.933,32.478,161.193,31.118z"/>
                    <path d="M256.733,18.538v12.58h-25.84v84.32h-12.92v-84.66h-25.5v-12.24H256.733z"/>
                    <path d="M509.353,18.538v12.58h-25.84v84.32h-12.92v-84.66h-25.5v-12.24H509.353z"/>
                    <path d="M679.693,113.398c-6.46,2.04-12.24,3.06-17.34,3.06c-10.2,0-19.04-2.04-26.52-6.12c-7.82-4.08-13.6-9.86-17.68-17
                        c-4.08-7.14-6.12-15.3-6.12-24.48c0-10.54,2.38-19.72,6.8-27.54c4.42-7.82,10.54-13.6,18.02-17.68s15.98-6.12,24.82-6.12
                        c5.44,0,10.54,0.68,15.3,2.04c4.76,1.36,9.18,3.06,12.92,5.1l-4.42,11.9c-2.72-1.7-6.46-3.06-10.88-4.08
                        c-4.42-1.36-8.16-1.7-11.56-1.7c-7.48,0-14.28,1.36-20.06,4.42c-5.78,3.06-10.2,7.48-13.26,12.92
                        c-3.06,5.78-4.76,12.24-4.76,19.72c0,7.14,1.7,13.26,4.76,18.7c3.06,5.44,7.48,9.52,13.26,12.58c5.78,3.06,12.24,4.42,19.72,4.42
                        c3.4,0,6.8-0.34,9.86-1.02c3.06-0.68,5.78-1.7,8.16-2.72v-19.04h-19.38v-12.58h32.3v39.1
                        C690.913,109.318,686.153,111.698,679.693,113.398z"/>
                    <path d="M719.133,42.338c4.42-7.48,10.54-13.6,18.02-18.02s15.64-6.8,24.82-6.8c8.84,0,17,2.38,24.82,6.8
                        c7.48,4.42,13.6,10.54,18.02,18.02c4.42,7.48,6.8,15.98,6.8,24.82s-2.38,17.34-6.8,24.82c-4.42,7.48-10.54,13.6-18.02,18.02
                        c-7.48,4.42-15.98,6.8-24.82,6.8s-17.34-2.04-24.82-6.46s-13.6-10.2-18.02-18.02c-4.42-7.48-6.8-15.98-6.8-25.16
                        C712.333,58.318,714.713,49.818,719.133,42.338z M730.693,85.518c3.06,5.78,7.48,10.2,13.26,13.26c5.44,3.4,11.56,5.1,18.36,5.1
                        c6.46,0,12.58-1.7,18.02-4.76c5.44-3.4,9.86-7.82,12.92-13.26c3.06-5.78,4.76-11.9,4.76-18.7s-1.7-12.92-4.76-18.7
                        c-3.06-5.78-7.48-10.2-13.26-13.6c-5.44-3.4-11.56-5.1-18.36-5.1c-6.46,0-12.58,1.7-18.36,5.1c-5.44,3.4-9.86,7.82-12.92,13.6
                        s-4.76,11.9-4.76,18.7C725.933,73.618,727.633,79.738,730.693,85.518z"/>
                    <polygon points="399.533,14.458 398.513,14.458 356.353,115.438 368.933,115.438 398.513,43.358 426.733,115.438 441.693,115.438 
                                "/>
                    <g>
                        <rect x="534.853" y="60.358" width="43.86" height="12.58"/>
                        <rect x="534.853" y="18.538" width="49.3" height="12.58"/>
                        <rect x="534.853" y="102.858" width="51.34" height="12.58"/>
                    </g>
                    <path d="M321.673,76.338c5.44-2.72,9.52-6.46,12.24-11.56s4.08-10.54,4.08-16.32c0-6.46-1.36-11.9-4.42-16.32
                        s-7.14-7.82-12.24-10.2s-11.22-3.4-17.68-3.4h-25.84v96.9h12.92v-84.66h14.96c4.42,0,7.82,1.02,10.54,2.72
                        c2.72,1.7,4.76,4.08,6.12,6.8c1.36,2.72,2.04,5.44,2.04,8.5c0,4.76-1.7,8.84-4.76,12.58c-3.06,3.74-8.16,5.44-14.96,5.44h-3.74
                        l29.92,48.28h15.3L321.673,76.338z"/>
                    </g>
                    </g>
                    </svg>
                </div>

              


                <div class="mt-16">
                    <div class="flex justify-left">
                        <iframe width="800" height="485" src="https://www.youtube.com/embed/xaaRKlfdjw0" title="Service numérique accompagné pour courtiers immobiliers" frameborder="0" allow="accelerometer; autoplay;" allowfullscreen></iframe>
                    </div>
                
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a href="https://id-3.net" class="group inline-flex items-center hover:text-gray-700 ligth:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                ID-3 Technologies
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        QRID {{ Illuminate\Foundation\Application::VERSION }} (Version{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
