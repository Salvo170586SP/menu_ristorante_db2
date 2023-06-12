<div class="py-3 flex flex-row justify-between">
    <div class="flex flex-col pr-2">
        <label for="witeWhine-name">Nome</label>
        <input type="text" class="rounded border-gray-400" value="{{ old('name', isset($whiteWine) ? $whiteWine->name : '') }}" name="name" id="witeWhine-name" required>
    </div>

    <div class="flex flex-col pl-2">
        <label for="witeWhine-priceBottle">Prezzo Bottiglia</label>
        <input type="text" class="rounded border-gray-400" value="{{ old('price_bottle', isset($whiteWine) ?  $whiteWine->price_bottle : '') }}" id="witeWhine-priceBottle" name="price_bottle">
        <span class="text-sm">*decimali con il punto</span>
    </div>
    <div class="flex flex-col pl-2">
        <label for="witeWhine-priceGoblet">Prezzo Calice</label>
        <input type="text" class="rounded border-gray-400" value="{{ old('price_goblet', isset($whiteWine) ?  $whiteWine->price_goblet : '') }}" id="witeWhine-priceGoblet" name="price_goblet">
        <span class="text-sm">*decimali con il punto</span>
    </div>
</div>
<div class="flex flex-col">
    <label for="witeWhine-description">Descrizione</label>
    <textarea name="description" class="rounded border-gray-400" id="witeWhine-description" cols="30" rows="5" style="margin-bottom: 20px">{{ old('description', isset($whiteWine) ?  $whiteWine->description : '') }}</textarea>
</div>
