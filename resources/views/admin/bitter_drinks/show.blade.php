<x-app-layout>
    <div class="container  mx-auto flex flex-col justify-center">

        <h1 class="text-3xl my-9">Dettaglio Amaro</h1>

        <div class="flex justify-between align-center py-5">
            <a href="{{ route('admin.bitter_drinks.index') }}" class="rounded-lg shadow text-white py-3 px-5  bg-gray-600 mx-2">Torna indietro</a>
        </div>

        <div class="bg-white py-5">

            <h1 class="text-3xl">
                Nome: {{ $bitterDrink->name }}
            </h1>
            <h2 class="text-lg">
                CL: @if($bitterDrink->cl) {{ $bitterDrink->cl }}cl @else -- @endif
            </h2>
            <span class="text-xl">
                Prezzo: @if($bitterDrink->price) €{{ $bitterDrink->price }} @else -- @endif
            </span>

            <p class="text-xl">
                Descrizione: @if($bitterDrink->description) {{ $bitterDrink->description }} @else -- @endif
            </p>

        </div>

    </div>
</x-app-layout>
