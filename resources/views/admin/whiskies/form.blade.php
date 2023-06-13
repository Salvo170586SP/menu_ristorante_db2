<div class="py-3 flex flex-row justify-between">
    <div class="flex flex-col pr-2">
        <label for="whiskies-name">Nome</label>
        <input type="text" class="rounded border-gray-400" value="{{ old('name', isset($whisky) ? $whisky->name : '') }}" name="name" id="whiskies-name" required>
    </div>
    <div class="flex flex-col pr-2">
        <label for="whiskies-name">CL</label>
        <input type="text" class="rounded border-gray-400" value="{{ old('cl', isset($whisky) ? $whisky->cl : '') }}" name="cl" id="whiskies-name">
    </div>

    <div class="flex flex-col pl-2">
        <label for="whiskies-price">Prezzo</label>
        <input type="text" class="rounded border-gray-400" value="{{ old('price', isset($whisky) ?  $whisky->price : '') }}" id="whiskies-price" name="price">
        <span class="text-sm">*decimali con il punto</span>
    </div>
</div>
<div class="flex flex-col">
    <label for="whiskies-description">Descrizione</label>
    <textarea name="description" class="rounded border-gray-400" id="whiskies-description" cols="30" rows="5" style="margin-bottom: 20px">{{ old('description', isset($whisky) ?  $whisky->description : '') }}</textarea>
</div>
