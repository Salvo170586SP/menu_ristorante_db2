<x-app-layout>
    <div class="container  mx-auto flex flex-col justify-center">

        <h1 class="text-3xl my-9">Dettaglio White Wines</h1>

        <div class="flex justify-between align-center py-5">
            <a href="{{ route('admin.white_wines.index') }}" class="rounded-lg shadow text-white py-3 px-5  bg-gray-600 mx-2">Torna indietro</a>
        </div>

        <div class="bg-white py-5">

            <h1 class="text-3xl">
                Nome: {{ $whiteWine->name }}
            </h1>
            <h2 class="text-xl">
                Prezzo Bottiglia: @if($whiteWine->price_bottle) €{{ $whiteWine->price_bottle }} @else -- @endif
            </h2>
            <h2 class="text-xl">
                Prezzo Calice: @if($whiteWine->price_goblet) €{{ $whiteWine->price_goblet }} @else -- @endif
            </h2>

            <p class="text-xl">
                Descrizione: @if($whiteWine->description) {{ $whiteWine->description }} @else -- @endif
            </p>

        </div>

    </div>
</x-app-layout>
