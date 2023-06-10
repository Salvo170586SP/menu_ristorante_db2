<div class="py-3 flex flex-row justify-between">
    <div class="flex flex-col pr-2">
        <label for="aperitif-name">Nome</label>
        <input type="text" class="rounded border-gray-400" value="{{ old('name', isset($aperitif) ? $aperitif->name : '') }}" name="name" id="aperitif-name" required>
    </div>

    <div class="flex flex-col pl-2">
        <label for="aperitif-price">Prezzo</label>
        <input type="text" class="rounded border-gray-400" value="{{ old('price', isset($aperitif) ?  $aperitif->price : '') }}" id="aperitif-price" name="price">
    </div>
</div>
<div class="flex flex-col">
    <label for="aperitif-description">Descrizione</label>
    <textarea name="description" class="rounded border-gray-400" id="aperitif-description" cols="30" rows="5" style="margin-bottom: 20px">{{ old('description', isset($aperitif) ?  $aperitif->description : '') }}</textarea>
</div>
