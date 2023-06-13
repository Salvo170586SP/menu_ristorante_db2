<div class="py-3 flex flex-row justify-between">
    <div class="flex flex-col pr-2">
        <label for="bottles-name">Nome</label>
        <input type="text" class="rounded border-gray-400" value="{{ old('name', isset($bottle) ? $bottle->name : '') }}" name="name" id="bottles-name" required>
    </div>
    <div class="flex flex-col pr-2">
        <label for="bottles-name">LT</label>
        <input type="text" class="rounded border-gray-400" value="{{ old('lt', isset($bottle) ? $bottle->lt : '') }}" name="lt" id="bottles-name">
    </div>

    <div class="flex flex-col pl-2">
        <label for="bottles-price">Prezzo</label>
        <input type="text" class="rounded border-gray-400" value="{{ old('price', isset($bottle) ?  $bottle->price : '') }}" id="bottles-price" name="price">
        <span class="text-sm">*decimali con il punto</span>
    </div>
</div>
<div class="flex flex-col">
    <label for="bottles-description">Descrizione</label>
    <textarea name="description" class="rounded border-gray-400" id="bottles-description" cols="30" rows="5" style="margin-bottom: 20px">{{ old('description', isset($bottle) ?  $bottle->description : '') }}</textarea>
</div>
