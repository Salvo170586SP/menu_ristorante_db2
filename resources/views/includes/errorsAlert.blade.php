@if($errors->any())
<div class="bg-amber-400 p-2 border-orange-400 rounded" role="alert">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif