<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

<body class="antialiased">

<x-guest-layout>
    <x-header>
        <!-- Title -->
        <h1 class="font-semibold text-4xl text-center">{{__('pages/home.title')}}</h1>
        <h2 class="text-center text-2xl mt-5">{{__('pages/home.sub-title')}}</h2>

        <!-- About -->
        <div class="m-40">
            <div
                class="grid grid-cols-2 text-xl m-40 bg-gray-800 bg-opacity-70 rounded-full">
                <div class="text-justify p-4 m-20">
                    {{__('pages/home.info-left')}}
                </div>
                <div class="text-justify p-4 m-20">
                    {{__('pages/home.info-right')}}
                </div>
            </div>
        </div>
    </x-header>
</x-guest-layout>

</body>
</html>
