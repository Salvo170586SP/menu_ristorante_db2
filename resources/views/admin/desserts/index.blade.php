<x-app-layout>
    <div class="container  mx-auto flex flex-col justify-center">

        <h1 class="text-3xl my-9">Lista Desserts</h1>

        <h5 class="text-lg">Totale dei prodotti in tabella: {{ count($desserts) }}</h5>

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
                @forelse($desserts as $dessert)
                <tr>
                    <td>{{ $dessert->id }}</td>
                    <td>{{ $dessert->name }}</td>
                    <td>@if($dessert->description) {{ $dessert->description }} @else -- @endif</td>
                    <td>€{{ $dessert->price }}</td>
                    <td>
                        <div class="flex justify-end">
                            <a href="{{ route('admin.desserts.show', $dessert->id) }}" class="rounded-lg shadow text-white p-2 bg-slate-500	">Vedi</a>
                            <a href="{{ route('admin.desserts.edit', $dessert->id) }}" class="rounded-lg shadow text-white p-2 bg-cyan-700 mx-2">Modifica</a>
                            <form action="{{ route('admin.desserts.destroy', $dessert->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="rounded-lg shadow text-white p-2 bg-red-500">Elimina</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td>Non ci sono desserts in lista</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>
