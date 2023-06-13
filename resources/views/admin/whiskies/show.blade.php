<x-app-layout>
    <div class="container  mx-auto flex flex-col justify-center">

        <h1 class="text-3xl my-9">Dettaglio Whisky</h1>

        <div class="flex justify-between align-center py-5">
            <a href="{{ route('admin.whiskies.index') }}" class="rounded-lg shadow text-white py-3 px-5  bg-gray-600 mx-2">Torna indietro</a>
        </div>

        <div class="bg-white py-5">

            <h1 class="text-3xl">
                Nome: {{ $whisky->name }}
            </h1>
            <h2 class="text-lg">
                CL: @if($whisky->cl) {{ $whisky->cl }}cl @else -- @endif
            </h2>
            <span class="text-xl">
                Prezzo: @if($whisky->price) €{{ $whisky->price }} @else -- @endif
            </span>

            <p class="text-xl">
                Descrizione: @if($whisky->description) {{ $whisky->description }} @else -- @endif
            </p>

        </div>

    </div>
</x-app-layout>
