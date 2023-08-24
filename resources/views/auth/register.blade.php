<x-guest-layout>
    <div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <x-application-logo/>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-[480px]">
            <div class="px-6 py-12 shadow sm:rounded-lg sm:px-12">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div>
                        <x-forms.input :label="__('form.name')" name="name"/>
                    </div>

                    <div>
                        <x-forms.input :label="__('form.email')" name="email" type="email"/>
                    </div>

                    <div>
                        <x-forms.input :label="__('form.password')" name="password" type="password"/>
                    </div>

                    <div>
                        <x-forms.input :label="__('form.password-confirm')" name="password_confirmation"
                                       type="password"/>
                    </div>


                    <x-forms.button>
                        {{ __('Register') }}
                    </x-forms.button>

                    <div class="flex items-center justify-end mt-2">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                           href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
