<x-app-layout>
    <div class="container  mx-auto flex flex-col justify-center">

        <h1 class="text-3xl my-9">Lista Amari</h1>

        <div class="flex justify-between align-center py-5">
            <h5 class="text-lg">Totale dei prodotti in tabella: {{ count($bitter_drinks) }}</h5>
            <a href="{{ route('admin.bitter_drinks.create') }}" class="rounded-lg shadow text-white py-3 px-5  bg-gray-600 mx-2">Crea</a>
        </div>
        @include('includes.alert')
        <table class="table-auto bg-white border-separate border-spacing-2 shadow mt-5">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Descrizione</th>
                    <th>CL</th>
                    <th>Prezzo</th>
                    <th class="text-end">Azioni</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @forelse($bitter_drinks as $bitter)
                <tr>
                    <td>{{ $bitter->id }}</td>
                    <td>{{ $bitter->name }}</td>
                    <td>@if($bitter->description) {{ $bitter->description }} @else -- @endif</td>
                    <td>@if($bitter->cl) {{ $bitter->cl }}cl @else -- @endif</td>
                    <td>@if($bitter->price) €{{ $bitter->price }} @else -- @endif</td>
                    <td>
                        <div class="flex justify-end">
                            <a href="{{ route('admin.bitter_drinks.show', $bitter->id) }}" class="rounded-lg shadow text-white p-2 bg-slate-500">Vedi</a>
                            <a href="{{ route('admin.bitter_drinks.edit', $bitter->id) }}" class="rounded-lg shadow text-white p-2 bg-cyan-700 mx-2">Modifica</a>
                            <form action="{{ route('admin.bitter_drinks.destroy', $bitter->id) }}" method="post" data-title="{{ $bitter->name }}" class="delete-form">
                                @csrf
                                @method('delete')
                                <button class="rounded-lg shadow text-white p-2 bg-red-500">Elimina</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td>Non ci sono amari in lista</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>
 

<script>
    const deleteForm = document.querySelectorAll('.delete-form');

    deleteForm.forEach(form => {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const title = form.getAttribute('data-title');
            const accept = confirm(`Sei sicuro di eliminare ${title}?`);

            if (accept) e.target.submit();
        })
    });
</script>

 