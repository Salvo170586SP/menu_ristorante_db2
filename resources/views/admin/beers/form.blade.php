<div class="py-3 flex flex-row justify-between">
    <div class="flex flex-col pr-2">
        <label for="beer-name">Nome</label>
        <input type="text" class="rounded border-gray-400" value="{{ old('name', isset($beer) ? $beer->name : '') }}" name="name" id="beer-name" required>
    </div>
    <div class="flex flex-col pr-2">
        <label for="beer-name">CL</label>
        <input type="text" class="rounded border-gray-400" value="{{ old('name', isset($beer) ? $beer->cl : '') }}" name="cl" id="beer-name">
    </div>

    <div class="flex flex-col pl-2">
        <label for="beer-price">Prezzo</label>
        <input type="text" class="rounded border-gray-400" value="{{ old('price', isset($beer) ?  $beer->price : '') }}" id="beer-price" name="price">
        <span class="text-sm">*decimali con il punto</span>
    </div>
</div>
<div class="flex flex-col">
    <label for="beer-description">Descrizione</label>
    <textarea name="description" class="rounded border-gray-400" id="beer-description" cols="30" rows="5" style="margin-bottom: 20px">{{ old('description', isset($beer) ?  $beer->description : '') }}</textarea>
</div>
