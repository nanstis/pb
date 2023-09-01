@php use Illuminate\Support\Facades\Auth; @endphp
<div>
    <div class="sticky top-0 z-40 lg:mx-auto">
        <div x-data="{ open: false }"
             class="flex h-16 items-center gap-x-4 px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-0 lg:shadow-none border-b-2 border-primary bg-white">

            <button type="button" class="-m-2.5 p-2.5 ml-4" @click="open = !open"
                    @click.outside="open = false">
                <span class="sr-only">Open sidebar</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                     aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                </svg>
            </button>

            <!-- Navigation -->
            <div x-show="open">
                <div class="relative z-50" role="dialog" aria-modal="true">
                    <div class="fixed inset-0 bg-gray-900/80"></div>
                    <div class="fixed inset-0 flex">
                        <div class="relative mr-16 flex w-full max-w-xs flex-1">

                            <!-- Close Button -->
                            <div class="absolute left-full top-0 flex w-16 justify-center pt-5">
                                <button type="button" class="-m-2.5 p-2.5">
                                    <span class="sr-only">Close sidebar</span>
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5"
                                         stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                </button>
                            </div>

                            <!-- SideBar -->
                            <div class="flex grow bg-white flex-col gap-y-5 overflow-y-auto  border-r-2 px-6 pb-4">
                                <div class="mt-4 border-b border-b-primary py-4">
                                    <img class="w-14" src="{{Vite::image('logo.png')}}"
                                         alt="PartyBooker">
                                </div>

                                <nav class="flex flex-1 flex-col">
                                    <ul role="list" class="flex flex-1 flex-col gap-y-7">

                                        <li>
                                            <ul role="list" class="-mx-2 space-y-1">

                                                <x-navigation-item route-name="home"
                                                                   :title="__('navigation.home')"/>

                                                <x-navigation-item route-name="partner"
                                                                   :title="__('navigation.partners')"/>

                                                <x-navigation-item route-name="advertisements.index"
                                                                   :title="__('navigation.advertisements')"/>

                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Elements -->
            <div class="flex flex-1 gap-x-4 self-stretch lg:gap-x-6 place-content-end mr-4">
                <div class="flex items-center gap-x-4 lg:gap-x-6">
                    {{$auth}}
                </div>
            </div>
        </div>
    </div>

    <main>
        <!-- Application -->
        {{$slot}}
    </main>
</div>

