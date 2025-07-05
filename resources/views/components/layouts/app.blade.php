<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')

    </head>
    <body class="flex flex-col transition-all bg-background-light min-h-screen md:flex-row">
        <div class="md:hidden">
            <x-layouts.app.header />
        </div>
        <div class="hidden md:block">
            <x-layouts.app.sidebar />
        </div>
        <main class="flex-1">
            {{ '' }}
        </main>
    </body>
</html>
