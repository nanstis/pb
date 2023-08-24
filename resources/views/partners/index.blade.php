<x-guest-layout>
    <x-header :tiny="true">
        <h1 class="font-semibold text-4xl mb-12">{{strtoupper(__('pages/partner.title'))}}</h1>
        <x-button icon="heroicon-o-building-storefront" route="partners.create" animation="zoom">
            {{strtoupper(__('pages/partner.register'))}}
        </x-button>
    </x-header>

    <!-- Benefits -->
    <x-list.illustration :title="strtoupper(__('pages/partner.benefits-title'))" sub-title="PartyBooker"
                         image="benefits.jpg">
        <x-list.item :index="1" file="benefit"/>
        <x-list.item :index="2" file="benefit"/>
        <x-list.item :index="3" file="benefit"/>
    </x-list.illustration>

    <!-- Plans -->


    <!-- USP -->
    <div class="justify-center my-20">
        <div class="mx-auto max-w-7xl px-8 sm:mt-20 md:mt-24 lg:px-8">
            <dl class="mx-auto grid max-w-2xl grid-cols-1 gap-x-6 gap-y-10 text-base leading-7
                text-gray-600 lg:grid-cols-2 lg:mx-0 lg:max-w-none lg:gap-x-8 ">
                <h3 class="text-3xl text-gray-700 font-monospace font-bold m-10">
                    {{strtoupper(__('pages/partner.usp-title'))}}
                    <hr>
                </h3>
                <div></div>

                <x-list.item :index="1" file="usp"/>
                <x-list.item :index="2" file="usp"/>
                <x-list.item :index="3" file="usp"/>
                <x-list.item :index="4" file="usp"/>
                <x-list.item :index="5" file="usp"/>
                <x-list.item :index="6" file="usp"/>
                <x-list.item :index="7" file="usp"/>
                <x-list.item :index="8" file="usp"/>
            </dl>
        </div>
    </div>
</x-guest-layout>
