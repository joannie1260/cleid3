<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)"
                required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="phone" :value="__('Phone')" />
            <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" :value="old('phone', $user->phone)"
                required autofocus autocomplete="phone" />
            <x-input-error class="mt-2" :messages="$errors->get('phone')" />
        </div>

        {{-- Email --}}
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)"
                required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification"
                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        {{-- Avatar --}}
        <div>
            <x-input-label for="avatar" :value="__('Avatar')" />
            <x-text-input id="avatar" name="avatar" type="text" class="mt-1 block w-full" :value="old('avatar', $user->avatar)"
                required autofocus autocomplete="avatar" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>
        {{-- Facebook --}}
        <div>
            <x-input-label for="url_facebook" :value="__('URL Facebook')" />
            <x-text-input id="url_facebook" name="url_facebook" type="text" class="mt-1 block w-full"
                :value="old('url_facebook', $user->url_facebook)" required autofocus autocomplete="url_facebook" />
            <x-input-error class="mt-2" :messages="$errors->get('url_facebook')" />
        </div>

        {{-- Twitter --}}
        <div>
            <x-input-label for="url_twitter" :value="__('URL Twittter')" />
            <x-text-input id="url_twitter" name="url_twitter" type="text" class="mt-1 block w-full"
                :value="old('url_twitter', $user->url_twitter)" required autofocus autocomplete="url_twitter" />
            <x-input-error class="mt-2" :messages="$errors->get('url_twitter')" />
        </div>

         {{-- Linkedin --}}
         <div>
            <x-input-label for="url_linkedin" :value="__('URL Linkedin')" />
            <x-text-input id="url_linkedin" name="url_linkedin" type="text" class="mt-1 block w-full"
                :value="old('url_linkedin', $user->url_linkedin)" required autofocus autocomplete="url_linkedin" />
            <x-input-error class="mt-2" :messages="$errors->get('url_linkedin')" />
        </div>

        {{-- GME --}}
        <div>
            <x-input-label for="url_gme" :value="__('URL GME')" />
            <x-text-input id="url_gme" name="url_gme" type="text" class="mt-1 block w-full"
                :value="old('url_gme', $user->url_gme)" required autofocus autocomplete="url_gme" />
            <x-input-error class="mt-2" :messages="$errors->get('url_gme')" />
        </div>

         {{-- Background --}}
         <div>
            <x-input-label for="url_background" :value="__('URL Background')" />
            <x-text-input id="url_background" name="url_background" type="text" class="mt-1 block w-full"
                :value="old('url_background', $user->url_background)" required autofocus autocomplete="url_background" />
            <x-input-error class="mt-2" :messages="$errors->get('url_background')" />
        </div>

     

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
