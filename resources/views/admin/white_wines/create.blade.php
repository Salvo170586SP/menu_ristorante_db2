<x-app-layout>
    <div class="container mx-auto flex flex-col justify-center align-center">

        <h1 class="text-3xl my-9">Crea White Wine</h1>

        <div class="flex justify-between align-center py-5">
            <a href="{{ route('admin.white_wines.index') }}" class="rounded-lg shadow text-white py-3 px-5  bg-gray-600 mx-2">Torna alla lista</a>
        </div>
        @include('includes.errorsAlert')
        <div class="mx-auto ">
            <form action="{{ route('admin.white_wines.store') }}" method="post" class="flex flex-col align-center justify-center">
                @csrf

                @include('admin.white_wines.form')

                <div class="text-end">
                    <button class="rounded-lg shadow text-white py-3 px-5 bg-gray-600 m-3">Crea</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
