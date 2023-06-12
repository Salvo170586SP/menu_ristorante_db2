<div class="py-3 flex flex-row justify-between">
    <div class="flex flex-col pr-2">
        <label for="redWhine-name">Nome</label>
        <input type="text" class="rounded border-gray-400" value="{{ old('name', isset($redWine) ? $redWine->name : '') }}" name="name" id="redWhine-name" required>
    </div>

    <div class="flex flex-col pl-2">
        <label for="redWhine-priceBottle">Prezzo Bottiglia</label>
        <input type="text" class="rounded border-gray-400" value="{{ old('price_bottle', isset($redWine) ?  $redWine->price_bottle : '') }}" id="redWhine-priceBottle" name="price_bottle">
        <span class="text-sm">*decimali con il punto</span>
    </div>
    <div class="flex flex-col pl-2">
        <label for="redWhine-priceGoblet">Prezzo Calice</label>
        <input type="text" class="rounded border-gray-400" value="{{ old('price_goblet', isset($redWine) ?  $redWine->price_goblet : '') }}" id="redWhine-priceGoblet" name="price_goblet">
        <span class="text-sm">*decimali con il punto</span>
    </div>
</div>
<div class="flex flex-col">
    <label for="redWhine-description">Descrizione</label>
    <textarea name="description" class="rounded border-gray-400" id="redWhine-description" cols="30" rows="5" style="margin-bottom: 20px">{{ old('description', isset($redWine) ?  $redWine->description : '') }}</textarea>
</div>
