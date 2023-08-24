<x-guest-layout>

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <x-application-logo/>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-[480px]">
            <div class="px-6 py-12 shadow sm:rounded-lg sm:px-12">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <x-slot name="logo">
                        <x-application-logo/>
                    </x-slot>
                    <div>
                        <x-forms.input :label="__('form.email')" name="email" type="email"/>
                    </div>

                    <div>
                        <x-forms.input :label="__('form.password')" name="password" type="password"/>
                    </div>

                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center hover:underline">
                            <x-checkbox id="remember_me" name="remember"/>
                            <span class="ml-2 text-sm text-gray-500">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                               href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <x-button class="ml-4">
                            {{ __('Log in') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
