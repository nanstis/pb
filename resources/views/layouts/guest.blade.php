<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<x-navigation>
    <!-- Header -->
    @if(isset($header))
        <div class="relative">
            <img src="{{Vite::image('header.jpg')}}" alt="{{__('alt.description')}}"
                {{ $attributes->class([
                   'object-cover',
                   'w-full',
                   'brightness-50',
                   'h-'.$headerHeight => $headerHeight != null]) }}
            />

            <div class="absolute top-1/3 px-4 py-3 w-full text-white">
                {{$header}}
            </div>
        </div>
    @endif

    <x-slot name="auth">
        @auth
            <a href="{{ url('/dashboard') }}" class="text-sky-500 hover:underline">Dashboard</a>
        @else
            <a href="{{ route('login') }}">
                {{ __('layout.login') }}
            </a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}"
                   class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
        @endauth

    </x-slot>

    {{$slot}}
</x-navigation>

</body>
</html>
