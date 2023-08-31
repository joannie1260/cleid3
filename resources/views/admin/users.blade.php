<x-app-layout>

    <div class="py-12">
        {{-- <div class="max-border-none w-7xl mx-auto sm:px-6 lg:px-8 space-y-6"> --}}
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-border-none w-xl">
                    <form action="{{ route('admin.users.updateAll') }}" method="POST">
                        @csrf
                        @method('PUT')
    
                        <table class="border">
                            <thead>
                                <tr>
                                    <th class="bg-gray-800 text-white gap-2 p-2">Id</th>
                                    <th class="bg-gray-800 text-white gap-2 p-2">Name</th>
                                    <th class="bg-gray-800 text-white gap-2 p-2">Email</th>
                                    <th class="bg-gray-800 text-white gap-2 p-2">Title</th>
                                    <th class="bg-gray-800 text-white gap-2 p-2">Avatar</th>
                                    <th class="bg-gray-800 text-white gap-2 p-2">Facebook</th>
                                    <th class="bg-gray-800 text-white gap-2 p-2">Linkedin</th>
                                    <th class="bg-gray-800 text-white gap-2 p-2">Instagram</th>
                                    <th class="bg-gray-800 text-white gap-2 p-2">Threads</th>
                                    <th class="bg-gray-800 text-white gap-2 p-2">GME</th>
                                    <th class="bg-gray-800 text-white gap-2 p-2">Background Image</th>
                                    <th class="bg-gray-800 text-white gap-2 p-2">logo compagnie</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>
                                            <input type="text" name="users[{{ $user->id }}][id]" value="{{ $user->id }}"class="border-none w-14">
                                        </td>
                                        <td>
                                            <input type="text" name="users[{{ $user->id }}][name]" value="{{ $user->name }}" class="border-none w-40">
                                        </td>

                                        <td>
                                            <input type="text" name="users[{{ $user->id }}][email]" value="{{ $user->email }}" class="border-none w-40">
                                        </td>

                                        <td>
                                            <input type="text" name="users[{{ $user->id }}][url_title]" value="{{ $user->url_title }}" class="border-none w-40">
                                        </td>
                                        <td>
                                            <input type="text" name="users[{{ $user->id }}][avatar]" value="{{ $user->avatar }}" class="border-none w-40">
                                        </td>
                                        <td>
                                            <input type="text" name="users[{{ $user->id }}][url_facebook]" value="{{ $user->url_facebook }}" class="border-none w-40">
                                        </td>
                                        <td>
                                            <input type="text" name="users[{{ $user->id }}][url_linkedin]" value="{{ $user->url_linkedin }}" class="border-none w-40">
                                        </td>
                                        <td>
                                            <input type="text" name="users[{{ $user->id }}][url_instagram]" value="{{ $user->url_instagram }}" class="border-none w-40">
                                        </td>
                                        <td>
                                            <input type="text" name="users[{{ $user->id }}][url_threads]" value="{{ $user->url_threads }}" class="border-none w-40">
                                        </td>
                                        <td>
                                            <input type="text" name="users[{{ $user->id }}][url_gme]" value="{{ $user->url_gme }}" class="border-none w-40">
                                        </td>
                                        <td>
                                            <input type="text" name="users[{{ $user->id }}][url_background]" value="{{ $user->url_background }}" class="border-none w-40">
                                        </td>
                                        <td>
                                            <input type="text" name="users[{{ $user->id }}][url_compagnie]" value="{{ $user->url_compagnie }}" class="border-none w-40">
                                        </td>

                                    </tr>

                                @endforeach
                            </tbody>
                        </table>
    
                        <button class="mt-4 p-3 text-white bg-red-500 rounded-md" type="submit">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    


</x-app-layout>
