@if(session('message'))
<div class="bg-sky-400 p-2 border-blue-400 rounded">
    {{ session('message') }}
</div>
@endif