<x-app-layout>
    <div class="container  mx-auto flex flex-col justify-center">

        <h1 class="text-3xl my-9">Modifica Special Long Drink</h1>

        <div class="flex justify-between align-center py-5">
            <a href="{{ route('admin.special_long_drinks.index') }}" class="rounded-lg shadow text-white py-3 px-5  bg-gray-600 mx-2">Torna alla lista</a>
        </div>
        @include('includes.errorsAlert')
        <div class="mx-auto">
            <form action="{{ route('admin.special_long_drinks.update', $specialLongDrink->id) }}" method="post" class="flex flex-col align-center justify-center">
                @csrf
                @method('put')
                
                @include('admin.special_long_drinks.form')
                
                <div class="text-end">
                    <button type="submit" class="rounded-lg shadow text-white py-3 px-5  bg-gray-600 m-3">Modifica</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
