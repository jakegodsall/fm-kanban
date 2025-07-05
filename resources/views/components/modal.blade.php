<div
    x-data="{ show: true }"
    class="fixed inset-0 z-50 flex justify-center px-4 py-12"
>
    <div
        x-show="show"
        x-cloak
        @click="show = false"
        class="fixed inset-0 bg-black opacity-60 w-screen h-screen z-10"
    ></div>
    <div
        x-show="show"
        x-cloak
        class="fixed w-4/5 bg-white z-20 p-5 max-w-md rounded-lg shadow-xl sm:w-full sm:mx-auto"
    >
        {{ $slot }}
    </div>
</div>