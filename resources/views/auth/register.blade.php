<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" maxlength="50" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Lastname -->
        <div class="mt-4">
            <x-input-label for="lastname" :value="__('Lastname')" />
            <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required maxlength="50" />
            <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
        </div>

        <!-- Document Type -->
        <div class="mt-4">
            <x-input-label for="doc_type" :value="__('Document type')" />
            <select id="doc_type" name="doc_type" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                <option value="">Select document type</option>
                <option value="C.C" {{ old('doc_type') == 'C.C' ? 'selected' : '' }}>C.C</option>
                <option value="C.E" {{ old('doc_type') == 'C.E' ? 'selected' : '' }}>C.E</option>
                <option value="T.I" {{ old('doc_type') == 'T.I' ? 'selected' : '' }}>T.I</option>
            </select>
            <x-input-error :messages="$errors->get('doc_type')" class="mt-2" />
        </div>

        <!-- Identity -->
        <div class="mt-4">
            <x-input-label for="identity" :value="__('Identity')" />
            <x-text-input id="identity" class="block mt-1 w-full" type="text" name="identity" :value="old('identity')" required maxlength="20" />
            <x-input-error :messages="$errors->get('identity')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" maxlength="70" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full"
                         type="password"
                         name="password"
                         required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                         type="password"
                         name="password_confirmation" 
                         required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Hidden role (default passenger) -->
        <input type="hidden" name="role" value="passenger" />

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>