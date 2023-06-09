<x-app-layout>
    <div class="container  mx-auto flex flex-col justify-center">

        <h1 class="text-3xl my-9">Lista Aperitivi</h1>

        <h5 class="text-lg">Totale dei prodotti in tabella: {{ count($aperitifs) }}</h5>

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
                @forelse($aperitifs as $aperitif)
                <tr>
                    <td>{{ $aperitif->id }}</td>
                    <td>{{ $aperitif->name }}</td>
                    <td>@if($aperitif->description) {{ $aperitif->description }} @else -- @endif</td>
                    <td>€{{ $aperitif->price }}</td>
                    <td>
                        <div class="flex justify-end">
                            <a href="{{ route('admin.aperitifs.show', $aperitif->id) }}" class="rounded-lg shadow text-white p-2 bg-slate-500	">Vedi</a>
                            <a href="{{ route('admin.aperitifs.edit', $aperitif->id) }}" class="rounded-lg shadow text-white p-2 bg-cyan-700 mx-2">Modifica</a>
                            <form action="{{ route('admin.aperitifs.destroy', $aperitif->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="rounded-lg shadow text-white p-2 bg-red-500">Elimina</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td>Non ci sono aperitivi in lista</td>
                </tr>
                @endforelse



            </tbody>
        </table>
    </div>
</x-app-layout>
