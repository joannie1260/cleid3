<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <div class="p-2 text-gray-900">
                    <p class="text-bold text-xl"> Les dernière statistiques pour {{ Auth::user()->name }}</p>
                </div>
                <x-custom-card title="Global Activities" amount="23,988" percentage="2" comparison="13,988"
                    :data="[
                        ['label' => 'Tailored ui', 'value' => '896', 'icon' => '<svg>...</svg>'],
                        ['label' => 'Customize', 'value' => '1200', 'icon' => '<svg>...</svg>'],
                        ['label' => 'Other', 'value' => '12', 'icon' => '<svg>...</svg>'],
                    ]">
                    <svg class="w-40 m-auto opacity-75" viewBox="0 0 146 146" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <!-- SVG path definitions -->
                    </svg>
                </x-custom-card>

                <div class=" from-gray-500 via-gray-700 to-gray-900 p-2">

                    <div class="flex flex-wrap gap-4 justify-left">

                        <!-- card 1 -->
                        <div
                            class="flex flex-col gap-2 h-40 text-gray-800 rounded-xl shadow-md p-6 max-w-[240px] bg-white bg-opacity-30 backdrop-filter backdrop-blur-lg">
                            <div class="font-semibold text-lg">Ce mois-ci</div>
                            <div class="font-semibold text-5xl tracking-tight">1500</div>
                            <div class="font-normal">Nbres visites site web</div>
                        </div>

                        <!-- card 2 -->
                        <div
                            class="flex flex-col gap-2 h-40 text-gray-800 rounded-xl shadow-md p-6 max-w-[240px] bg-red-200 bg-opacity-30 hover:bg-red-300 backdrop-filter backdrop-blur-lg">
                            <div class="font-semibold text-lg">Hier</div>
                            <div class="font-semibold text-5xl tracking-tight">$9.524</div>
                            <div class="font-normal">Dépense Facebook</div>
                        </div>

                        <div
                            class="flex flex-col gap-2 h-40 text-gray-800 rounded-xl shadow-md p-6 max-w-[240px] bg-white bg-opacity-30 backdrop-filter backdrop-blur-lg">
                            <div class="font-semibold text-lg">Le mois dernier</div>
                            <div class="font-semibold text-5xl tracking-tight">1550</div>
                            <div class="font-normal">Nbres Likes</div>
                        </div>

                        <div
                            class="flex flex-col gap-2 h-40 text-gray-800 rounded-xl shadow-md p-6 max-w-[240px] bg-white bg-opacity-30 backdrop-filter backdrop-blur-lg">
                            <div class="font-semibold text-lg">Mois en cour</div>
                            <div class="font-semibold text-5xl tracking-tight">$100</div>
                            <div class="font-normal">Solde compte ID-3</div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="flex flex-wrap gap-5 px-2">

            <section>
                <div
                    class="shadow-sm bg-white from-gray-500 via-gray-600 to-green-500 p-6 sm:p-10 rounded-2xl w-full text-white flex items-center justify-between max-w-2xl mx-auto">

                    <div class="flex flex-col gap-6">
                        <div class="">
                            <span class="text-gray-500">Partagez vos coordonnées</span>
                            <br>
                            <span class="text-4xl text-gray-800 font-semibold">Carte QR ID-3</span>
                        </div>
                        <a href="{{ url('/qrid=' . Auth::user()->id . '&type=vcard') }}" target="_blank"
                            rel="noreferrer"
                            class="text-black bg-white border hover:bg-green-200 px-4 py-2 rounded-lg w-fit ease duration-300 flex gap-1 items-center group">
                            <span>Accéder à ma carte QR</span>

                            <svg data-v-e660a7a7="" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                class="group-hover:translate-x-1 transition-transform ease duration-200" width="1em"
                                height="1em" viewBox="0 0 256 256">
                                <path fill="currentColor"
                                    d="m221.66 133.66l-72 72a8 8 0 0 1-11.32-11.32L196.69 136H40a8 8 0 0 1 0-16h156.69l-58.35-58.34a8 8 0 0 1 11.32-11.32l72 72a8 8 0 0 1 0 11.32Z">
                                </path>
                            </svg>
                        </a>
                    </div>

                </div>

            </section>

            <section>
                <div
                    class="bg-gradient-to-br from-gray-500 via-gray-600 to-green-200 p-6 sm:p-10 rounded-2xl w-full text-white flex items-center justify-between max-w-2xl mx-auto">

                    <div class="flex flex-col gap-6">
                        <div class="">
                            <span class="text-gray-200">Questions & Support</span>
                            <br>
                            <span class="text-4xl text-white font-semibold">Vous ne savez plus à qui parler</span>
                        </div>
                        <a href="{{ url('/qrid=' . Auth::user()->id . '&type=stratego') }}" target="_blank"
                            rel="noreferrer"
                            class="text-black bg-white hover:bg-green-200 px-4 py-2 rounded-lg w-fit ease duration-300 flex gap-1 items-center group">
                            <span>Accéder au liens</span>

                            <svg data-v-e660a7a7="" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                class="group-hover:translate-x-1 transition-transform ease duration-200" width="1em"
                                height="1em" viewBox="0 0 256 256">
                                <path fill="currentColor"
                                    d="m221.66 133.66l-72 72a8 8 0 0 1-11.32-11.32L196.69 136H40a8 8 0 0 1 0-16h156.69l-58.35-58.34a8 8 0 0 1 11.32-11.32l72 72a8 8 0 0 1 0 11.32Z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </section>
        </div>

        <x-footer></x-footer>
    </div>

</x-app-layout>
