<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Functie Validator') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('chatresponse') }}">
                @csrf
                <label for="userQuery">Jouw Functie</label>
                <input type="text" name="userQuery" id="userQuery" placeholder="Your function here">
            </form>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (isset($_SESSION['userQuery']))
                {{$_GET['userQuery']}}
            @endif
        </div>
    </div>
</x-app-layout>
