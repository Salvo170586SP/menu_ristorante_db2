<div class="py-3 flex flex-row justify-between">
    <div class="flex flex-col pr-2">
        <label for="long_drink-name">Nome</label>
        <input type="text" class="rounded border-gray-400" value="{{ old('name', isset($longDrink) ? $longDrink->name : '') }}" name="name" id="long_drink-name" required>
    </div>

    <div class="flex flex-col pl-2">
        <label for="long_drink-price">Prezzo</label>
        <input type="text" class="rounded border-gray-400" value="{{ old('price', isset($longDrink) ?  $longDrink->price : '') }}" id="long_drink-price" name="price">
    </div>
</div>
<div class="flex flex-col">
    <label for="long_drink-description">Descrizione</label>
    <textarea name="description" class="rounded border-gray-400" id="long_drink-description" cols="30" rows="5" style="margin-bottom: 20px">{{ old('description', isset($longDrink) ?  $longDrink->description : '') }}</textarea>
</div>
