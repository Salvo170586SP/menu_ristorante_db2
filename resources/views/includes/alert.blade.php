@if(session('message'))
<div class="bg-sky-500 p-2 text-white border-blue-900 rounded">
    {{ session('message') }}
</div>
@endif