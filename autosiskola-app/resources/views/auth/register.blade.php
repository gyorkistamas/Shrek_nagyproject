<x-guest-layout>
    <form method="POST" action="{{ route('register.store') }}">
        @csrf

        <!-- Email -->
        <div class="mt-4">
            <x-input-label for="email" :value="'Email cím *'" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Név -->
        <div class="mt-4">
            <x-input-label for="nev" :value="'Felhasználónév *'" />
            <x-text-input id="nev" class="block mt-1 w-full" type="text" name="nev" required />
            <x-input-error :messages="$errors->get('nev')" class="mt-2" />
        </div>

        <!-- TAJ-->
        <div class="mt-4">
            <x-input-label for="taj" :value="'TAJ szám *'" />
            <x-text-input id="taj" class="block mt-1 w-full" type="text" name="taj" required />
            <x-input-error :messages="$errors->get('taj')" class="mt-2" />
        </div>

        <!-- Személyi -->
        <div class="mt-4">
            <x-input-label for="szemelyi" :value="'Személyi igazolvány szám *'" />
            <x-text-input id="szemelyi" class="block mt-1 w-full" type="text" name="szemelyi" required />
            <x-input-error :messages="$errors->get('szemelyi')" class="mt-2" />
        </div>

        <!-- Adóazonosító-->
        <div class="mt-4">
            <x-input-label for="adoszam" :value="'Adószám *'" />
            <x-text-input id="adoszam" class="block mt-1 w-full" type="text" name="adoszam" required />
            <x-input-error :messages="$errors->get('adoszam')" class="mt-2" />
        </div>

        <!-- Szülidő -->
        <div class="mt-4">
            <x-input-label for="szulido" :value="'Születési idő *'" />
            <x-text-input id="szulido" class="block mt-1 w-full" type="date" name="szulido" required />
            <x-input-error :messages="$errors->get('szulido')" class="mt-2" />
        </div>

        <!-- Szülhely -->
        <div class="mt-4">
            <x-input-label for="szulhely" :value="'Születési hely *'" />
            <x-text-input id="szulhely" class="block mt-1 w-full" type="text" name="szulhely" required />
            <x-input-error :messages="$errors->get('szulhely')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="elsosegelyvizsga" :value="'Elsősegélyvizsga megvan?'" />
            <input type="hidden" name="elsosegelyvizsga" value="0">
            <input type="checkbox" id="elsosegelyvizsga" name="elsosegelyvizsga" value="1" {{ old('elsosegelyvizsga', 0) == 1 ? 'checked' : '' }} />
            <x-input-error :messages="$errors->get('elsosegelyvizsga')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="szemuveg" :value="'Szemüveges?'" />
            <input type="hidden" name="szemuveg" value="0">
            <input type="checkbox" id="szemuveg" name="szemuveg" value="1" {{ old('szemuveg', 0) == 1 ? 'checked' : '' }} />
            <x-input-error :messages="$errors->get('szemuveg')" class="mt-2" />
        </div>

        <!-- Jelszó -->
        <div class="mt-4">
            <x-input-label for="password" :value="'Jelszó *'" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="'Jelszó megerősítése *'" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Gomb -->
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ 'Már regisztráltál?' }}
            </a>

            <x-primary-button class="ml-4">
                {{ 'Regisztrálás' }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
