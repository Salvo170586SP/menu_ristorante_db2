<x-app-layout>
    <div class="container  mx-auto flex flex-col justify-center">

        <h1 class="text-3xl my-9">Dettaglio Soft Drink</h1>

        <div class="flex justify-between align-center py-5">
            <a href="{{ route('admin.soft_drinks.index') }}" class="rounded-lg shadow text-white py-3 px-5  bg-gray-600 mx-2">Torna indietro</a>
        </div>

        <div class="bg-white py-5">



            <h1 class="text-3xl">
                Nome: {{ $softDrink->name }}
            </h1>
            <h2 class="text-lg">
                CL: @if($softDrink->cl) {{ $softDrink->cl }}cl @else -- @endif
            </h2>
            <span class="text-xl">
                Prezzo: @if($softDrink->price) €{{ $softDrink->price }} @else -- @endif
            </span>

            <p class="text-xl">
                Descrizione: @if($softDrink->description) {{ $softDrink->description }} @else -- @endif
            </p>

        </div>

    </div>
</x-app-layout>
