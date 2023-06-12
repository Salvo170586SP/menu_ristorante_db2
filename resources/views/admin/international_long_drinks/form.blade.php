<div class="py-3 flex flex-row justify-between">
    <div class="flex flex-col pr-2">
        <label for="internationalLongDrink-name">Nome</label>
        <input type="text" class="rounded border-gray-400" value="{{ old('name', isset($internationalLongDrink) ? $internationalLongDrink->name : '') }}" name="name" id="long_drink-name" required>
    </div>

    <div class="flex flex-col pl-2">
        <label for="internationalLongDrink-price">Prezzo</label>
        <input type="text" class="rounded border-gray-400" value="{{ old('price', isset($internationalLongDrink) ?  $internationalLongDrink->price : '') }}" id="long_drink-price" name="price">
        <span class="text-sm">*decimali con il punto</span>
    </div>
</div>
<div class="flex flex-col">
    <label for="internationalLongDrink-description">Descrizione</label>
    <textarea name="description" class="rounded border-gray-400" id="internationalLongDrink-description" cols="30" rows="5" style="margin-bottom: 20px">{{ old('description', isset($internationalLongDrink) ?  $internationalLongDrink->description : '') }}</textarea>
</div>
