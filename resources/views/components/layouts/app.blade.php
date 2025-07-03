<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')

    </head>
    <body class="flex transition-all bg-white dark:bg-zinc-800 min-h-screen">
        <x-layouts.app.sidebar />
        <main class="flex-1">
            {{ $slot ?? '' }}
        </main>
    </body>
</html>
