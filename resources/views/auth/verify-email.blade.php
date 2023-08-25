<x-guest-layout>
    <div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <x-application-logo/>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-[480px]">
            <div class="px-6 py-12 shadow sm:rounded-lg sm:px-12">
                <div class="mb-4 text-sm text-gray-600">
                    {{ __('Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                </div>
                <div class="mt-4 flex items-center justify-between">
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <div>
                            <x-forms.button>
                                {{ __('Resend Verification Email') }}
                            </x-forms.button>
                        </div>
                    </form>

                    <div>
                        <a
                            href="{{ route('profile.show') }}"
                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        >
                            {{ __('Edit Profile') }}</a>

                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf

                            <button type="submit"
                                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ml-2">
                                {{ __('Log Out') }}
                            </button>
                        </form>
                    </div>
                </div>

                @if (session('status') == 'verification-link-sent')
                    <div class="mt-4 font-medium text-sm text-green-600">
                        {{ __('A new verification link has been sent to the email address you provided in your profile settings.') }}
                    </div>
                @endif
            </div>
        </div>
    </div>


</x-guest-layout>
