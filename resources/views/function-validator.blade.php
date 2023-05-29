<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Functie Validator') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('chatresponse') }}">
                    <div class="w-4/5 m-5">
                    @csrf
                    <label class="inline-block w-2/12 text-center font-bold m-5 text-2xl" for="language">Taal</label>
                    <textarea rows="2" cols="50" type="text" name="language" id="language" placeholder="php.. javascript.. python..."></textarea>
                    <br>
                    <label class="inline-block w-2/12 text-center font-bold m-5 text-2xl" for="userQuery">Jouw Functie</label>
                    <textarea rows="4" cols="50" type="text" name="userQuery" id="userQuery" placeholder="Your function here"></textarea>
                </div>
                <button type="submit" class="uppercase bg-black text-gray-200 text-lg w-1/5 m-10 font-extrabold py-4 px-8 rounded-3xl hover:bg-sky-700">Submit</button>
            </form>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (isset($_SESSION['userQuery']))
                {{$_GET['userQuery']}}
            @endif
        </div>
    </div>
</x-app-layout>
