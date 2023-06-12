<x-app-layout>
    <div class="container  mx-auto flex flex-col justify-center">

        <h1 class="text-3xl my-9">Dettaglio Red Wines</h1>

        <div class="flex justify-between align-center py-5">
            <a href="{{ route('admin.red_wines.index') }}" class="rounded-lg shadow text-white py-3 px-5  bg-gray-600 mx-2">Torna indietro</a>
        </div>

        <div class="bg-white py-5">

            <h1 class="text-3xl">
                Nome: {{ $redWine->name }}
            </h1>
            <h2 class="text-xl">
                Prezzo Bottiglia: @if($redWine->price_bottle) €{{ $redWine->price_bottle }} @else -- @endif
            </h2>
            <h2 class="text-xl">
                Prezzo Calice: @if($redWine->price_goblet) €{{ $redWine->price_goblet }} @else -- @endif
            </h2>

            <p class="text-xl">
                Descrizione: @if($redWine->description) {{ $redWine->description }} @else -- @endif
            </p>

        </div>

    </div>
</x-app-layout>
