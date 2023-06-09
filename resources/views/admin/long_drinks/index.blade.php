<x-app-layout>
    <div class="container  mx-auto flex flex-col justify-center">

        <h1 class="text-3xl my-9">Lista Long Drinks</h1>

        <h5 class="text-lg">Totale dei prodotti in tabella: {{ count($long_drinks) }}</h5>

        <table class="table-auto border-separate border-spacing-2 shadow mt-5">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Descrizione</th>
                    <th>Prezzo</th>
                    <th class="text-end">Azioni</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @forelse($long_drinks as $long_drink)
                <tr>
                    <td>{{ $long_drink->id }}</td>
                    <td>{{ $long_drink->name }}</td>
                    <td>@if($long_drink->description) {{ $long_drink->description }} @else -- @endif</td>
                    <td>€{{ $long_drink->price }}</td>
                    <td>
                        <div class="flex justify-end">
                            <a href="{{ route('admin.desserts.show', $long_drink->id) }}" class="rounded-lg shadow text-white p-2 bg-slate-500	">Vedi</a>
                            <a href="{{ route('admin.desserts.edit', $long_drink->id) }}" class="rounded-lg shadow text-white p-2 bg-cyan-700 mx-2">Modifica</a>
                            <form action="{{ route('admin.desserts.destroy', $long_drink->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="rounded-lg shadow text-white p-2 bg-red-500">Elimina</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td>Non ci sono long drinks in lista</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>
