<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="flex items-center justify-center p-6 sm:p-12 md:w-full">
        <div class="w-full">
          <h1
            class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200"
          >
            Login
          </h1>
          <form method="POST" action="{{ route('login') }}">
            @csrf
          <label for="email" class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Email</span>
            <input
              id="email"
              class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-sky-400 focus:outline-none focus:shadow-outline-sky dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
              type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
            />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
          </label>
          <label for="password" class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Password</span>
            <input id="password"
              class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-sky-400 focus:outline-none focus:shadow-outline-sky dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
              placeholder="***************"
              type="password"
              name="password"
              required autocomplete="current-password"
            />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
          </label>

          <!-- You should use a button here, as the anchor is only used for the example  -->
          <button type="submit"
            class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-sky-600 border border-transparent rounded-lg active:bg-sky-600 hover:bg-sky-700 focus:outline-none focus:shadow-outline-sky"

          >
            Log in
          </button>
        </form>
          <hr class="my-8" />
          <p class="mt-4">
            @if (Route::has('password.request'))
                <a
                class="text-sm font-medium text-sky-600 dark:text-sky-400 hover:underline"
                href="{{ route('password.request') }}"
                >
            Forgot your password?
            </a>
            @endif
          </p>
        </div>
      </div>
    {{-- <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form> --}}
</x-guest-layout>
