<x-guest-layout>
    <div class="flex inline-block d-inline-block text-center justify-center">
        @auth
        <a href="/dashboard">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center p-3">Home</h2>
        </a>

        <a href="/validator">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center p-3">Validator</h2>
        </a>
        @endauth

        @guest
        <a href="/">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center p-3">Home</h2>
        </a>
        @endguest
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-policy />
            </div>
        </div>
    </div>
</x-guest-layout>
