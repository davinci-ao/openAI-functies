<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ChatGPT Response') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="mt-6 text-xl font-semibold text-gray-900">Your {{$_POST['language']}} code</h2>
                <code>{{ $_POST['userQuery'] }}</code>
            </div>

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <p>This should become chatGPT's response</p>
            </div>

        </div>
    </div>
</x-app-layout>
