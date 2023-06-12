<div class="py-3 flex flex-row justify-between">
    <div class="flex flex-col pr-2">
        <label for="special_long_drink-name">Nome</label>
        <input type="text" class="rounded border-gray-400" value="{{ old('name', isset($specialLongDrink) ? $specialLongDrink->name : '') }}" name="name" id="special_long_drink-name" required>
    </div>
    <div class="flex flex-col pl-2">
        <label for="special_long_drink-price">Prezzo</label>
        <input type="text" class="rounded border-gray-400" value="{{ old('price', isset($specialLongDrink) ?  $specialLongDrink->price : '') }}" id="special_long_drink-price" name="price">
        <span class="text-sm">*decimali con il punto</span>
    </div>
</div>
<div class="flex flex-col">
    <label for="special_long_drink-description">Descrizione</label>
    <textarea name="description" class="rounded border-gray-400" id="special_long_drink-description" cols="30" rows="5" style="margin-bottom: 20px">{{ old('description', isset($specialLongDrink) ?  $specialLongDrink->description : '') }}</textarea>
</div>
