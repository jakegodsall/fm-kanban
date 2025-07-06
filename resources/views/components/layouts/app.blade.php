<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
        @livewireStyles
    </head>
    <body class="flex flex-col transition-all bg-background-light min-h-screen max-w-screen md:flex-row">
        <div class="md:hidden">
            <x-layouts.app.header />
        </div>
        <div class="hidden md:block">
            <x-layouts.app.sidebar />
        </div>
        <main class="flex-1">
            {{ $slot ?? '' }}
        </main>
        @livewireScriptConfig
    </body>
</html>
