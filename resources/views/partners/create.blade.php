<x-app-layout>
    <div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-[820px]">
            <div class="px-6 py-12 shadow sm:rounded-lg sm:px-12">

                <form method="POST" action="{{route('partners.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-6">
                            <x-application-logo/>
                        </div>

                        <!-- Profile -->
                        <div class="border-b border-gray-900/10 pb-12">
                            <h2 class="text-base font-semibold leading-7 text-gray-900">{{__('pages/partner.create-title')}}</h2>
                            <p class="mt-1 text-sm leading-6 text-gray-600">{{__('pages/partner.create-warning')}}</p>

                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-4">
                                <!-- Name -->
                                <div class="sm:col-span-2 sm:col-start-1">
                                    <x-forms.input type="text"
                                                   name="name"
                                                   label="{{__('form.company-name')}}"/>
                                </div>

                                <!-- Email -->
                                <div class="sm:col-span-2">
                                    <x-forms.input type="email"
                                                   name="email"
                                                   label="{{__('form.email')}}"/>
                                </div>

                                <!-- Phone -->
                                <div class="sm:col-span-2">
                                    <x-forms.input type="text"
                                                   name="phone"
                                                   label="{{__('form.phone')}}"/>
                                </div>

                                <!-- Fax -->
                                <div class="sm:col-span-2">
                                    <x-forms.input type="text"
                                                   name="fax"
                                                   label="{{__('form.fax')}}"/>
                                </div>
                            </div>


                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-4">

                                <!-- City -->
                                <div class="sm:col-span-2 sm:col-start-1">
                                    <x-forms.input type="text"
                                                   name="city"
                                                   label="{{__('form.city')}}"/>
                                </div>

                                <!-- State -->
                                <div class="sm:col-span-2">
                                    <x-forms.select name="state" label="{{__('form.state')}}">
                                        @foreach($states as $state)
                                            <option
                                                value="{{ $state->short }}" @selected(old('state') == $state->short)>
                                                {{$state->name}}
                                            </option>
                                        @endforeach
                                    </x-forms.select>
                                </div>

                                <!-- Address -->
                                <div class="sm:col-span-2">
                                    <x-forms.input type="text"
                                                   name="address"
                                                   label="{{__('form.address')}}"/>
                                </div>

                                <!-- Zip -->
                                <div class="sm:col-span-2">
                                    <x-forms.input type="number"
                                                   name="zip"
                                                   label="{{__('form.zip')}}"/>
                                </div>
                            </div>
                        </div>

                        <!-- Cover Logo -->
                        <div class="col-span-full">
                            <label for="cover" class="block text-sm font-medium leading-6 text-gray-900">
                                {{__('form.cover-image')}}
                            </label>
                            <div
                                class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                <div class="text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                         aria-hidden="true">
                                        <path fill-rule="evenodd"
                                              d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                        <label for="cover"
                                               class="relative cursor-pointer rounded-md bg-white font-semibold text-primary focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:underline">
                                            <span>{{__('form.choose-file')}}</span>
                                            <input id="cover" name="cover" type="file" class="sr-only">
                                        </label>
                                        <p class="pl-1">{{__('form.drop-file')}}</p>
                                    </div>
                                    <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                                </div>
                            </div>
                            <x-forms.error field="cover"/>
                        </div>

                        <!-- About -->
                        <div class="border-b border-gray-900/10 pb-12">

                            <!-- Slogan -->
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="col-span-full">
                                    <x-forms.textbox name="slogan" label="{{__('form.slogan')}}"/>
                                </div>
                            </div>

                            <!-- Summary -->
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="col-span-full">
                                    <x-forms.textbox name="summary" label="{{__('form.summary')}}"/>
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="col-span-full">
                                    <x-forms.textbox name="description" label="{{__('form.description')}}"/>
                                </div>
                            </div>
                        </div>

                        <!-- Languages -->
                        <div class="border-b border-gray-900/10 pb-12">
                            <x-forms.checkbox-list
                                :title="__('pages/partner.create-languages')"
                                :items="[
                                    (object) [
                                        'name' => 'french',
                                        'label' => __('form.french'),
                                    ],
                                    (object) [
                                        'name' => 'english',
                                        'label' => __('form.english'),
                                    ],
                                    (object) [
                                        'name' => 'german',
                                        'label' => __('form.german'),
                                    ],
                                    (object) [
                                        'name' => 'italian',
                                        'label' => __('form.italian'),
                                    ],
                                    (object) [
                                        'name' => 'other',
                                        'label' => __('form.other'),
                                    ],
                                ]"/>
                        </div>

                        <div class="border-b border-gray-900/10 pb-12">
                            <fieldset>
                                <legend
                                    class="text-base font-semibold leading-6 text-gray-900">
                                    {{__('pages/partner.create-websites')}}
                                </legend>
                                <div class="mt-4 divide-y divide-gray-200 border-b border-t border-gray-200">

                                    <!-- Website -->
                                    <div class="mt-4">
                                        <x-forms.input type="text"
                                                       name="website"
                                                       placeholder="https://"
                                                       label="{{__('form.website')}}"/>
                                    </div>

                                    <br>

                                    <div class="grid grid-cols-2">
                                        <!-- Facebook, Twitter, Vimeo -->
                                        <div>
                                            <div class="isolate -space-y-px rounded-md shadow-sm">
                                                <div class="merged-input-container">
                                                    <label for="facebook"
                                                           class="block text-xs font-medium text-gray-900">
                                                        Facebook
                                                    </label>
                                                    <input type="text" name="facebook" id="facebook"
                                                           class="merged-input"
                                                           placeholder="https://facebook.com/">
                                                </div>
                                                <div class="merged-input-container">
                                                    <label for="twitter"
                                                           class="block text-xs font-medium text-gray-900">
                                                        Twitter (X)
                                                    </label>
                                                    <input type="text" name="twitter" id="twitter"
                                                           class="merged-input"
                                                           placeholder="https://twitter.com/">
                                                </div>
                                                <div class="merged-input-container">
                                                    <label for="vimeo" class="block text-xs font-medium text-gray-900">
                                                        Vimeo
                                                    </label>
                                                    <input type="text" name="vimeo" id="vimeo"
                                                           class="merged-input"
                                                           placeholder="https://vimeo.com/">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Instagram, Linkedin, Youtube  -->
                                        <div>
                                            <div class="isolate -space-y-px rounded-md shadow-sm">
                                                <div class="merged-input-container">
                                                    <label for="instagram"
                                                           class="block text-xs font-medium text-gray-900">
                                                        Instagram
                                                    </label>
                                                    <input type="text" name="instagram" id="instagram"
                                                           class="merged-input"
                                                           placeholder="https://instagram.com/">
                                                </div>
                                                <div class="merged-input-container">
                                                    <label for="linkedin"
                                                           class="block text-xs font-medium text-gray-900">
                                                        Linkedin
                                                    </label>
                                                    <input type="text" name="linkedin" id="linkedin"
                                                           class="merged-input"
                                                           placeholder="https://linkedin.com/">
                                                </div>
                                                <div class="merged-input-container">
                                                    <label for="youtube"
                                                           class="block text-xs font-medium text-gray-900">
                                                        Youtube
                                                    </label>
                                                    <input type="text" name="youtube" id="youtube"
                                                           class="merged-input"
                                                           placeholder="https://youtube.com/">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <x-forms.button>
                            {{__('form.save')}}
                        </x-forms.button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
