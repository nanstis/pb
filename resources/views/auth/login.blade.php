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

                    <div>
                        <x-forms.input :label="__('form.email')" name="email" type="email"/>
                    </div>

                    <div>
                        <x-forms.input :label="__('form.password')" name="password" type="password"/>
                    </div>

                    <div class="block mb-8">
                        <label for="remember_me" class="flex items-center hover:underline">
                            <x-checkbox id="remember_me" name="remember" class="border-gray-500"/>
                            <span class="ml-2 text-sm text-gray-500">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <x-forms.button class="mt-4">
                        {{ __('Log in') }}
                    </x-forms.button>

                    <div class="flex items-center justify-end mt-2">
                        <div class="grid grid-rows-2">
                            <div>
                                <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                   href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            </div>

                            <div>
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                       href="{{ route('register') }}">
                                        {{ __('Not a member?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
