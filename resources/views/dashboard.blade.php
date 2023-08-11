<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Vous êtes maintenant connecté!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
          <div class="max-w-2xl">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Notre équipes</h2>
          </div>
          <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
            
            
            <li>
              <div class="flex items-center gap-x-6 gap-y-12 p-28">
                <img class="h-16 w-16 rounded-full p-28" src="https://www.id-3.net/wp-content/uploads/2023/02/rdv_profil_louisPhilippe.png" alt="">
                <div>
                  <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Louis-Philippe Brunet</h3>
                  <p class="text-sm font-semibold leading-6 text-indigo-600">Stratège numérique
                  </p>
                  <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                    <div class="flex items-center gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path fill-rule="evenodd" d="M2.106 6.447A2 2 0 001 8.237V16a2 2 0 002 2h14a2 2 0 002-2V8.236a2 2 0 00-1.106-1.789l-7-3.5a2 2 0 00-1.788 0l-7 3.5zm1.48 4.007a.75.75 0 00-.671 1.342l5.855 2.928a2.75 2.75 0 002.46 0l5.852-2.926a.75.75 0 10-.67-1.342l-5.853 2.926a1.25 1.25 0 01-1.118 0l-5.856-2.928z" clip-rule="evenodd" />
                          </svg>
                          
                          
                        <a href="mailto:lp@id-3.net" class="group inline-flex items-center hover:text-gray-700 ligth:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            Envoyer un courriel
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path fill-rule="evenodd" d="M10 2c-2.236 0-4.43.18-6.57.524C1.993 2.755 1 4.014 1 5.426v5.148c0 1.413.993 2.67 2.43 2.902.848.137 1.705.248 2.57.331v3.443a.75.75 0 001.28.53l3.58-3.579a.78.78 0 01.527-.224 41.202 41.202 0 005.183-.5c1.437-.232 2.43-1.49 2.43-2.903V5.426c0-1.413-.993-2.67-2.43-2.902A41.289 41.289 0 0010 2zm0 7a1 1 0 100-2 1 1 0 000 2zM8 8a1 1 0 11-2 0 1 1 0 012 0zm5 1a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                          </svg>
                          
                        <a href="mailto:lp@id-3.net" class="group inline-flex items-center hover:text-gray-700 ligth:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            Envoyer un texto
                        </a>
                    </div>
                </div>
                </p>
                

                </div>
              </div>
            </li>
      
            <!-- More people... -->
          </ul>
        </div>
      </div>
</x-app-layout>
