<div class="py-3 flex flex-row justify-between">
    <div class="flex flex-col pr-2">
        <label for="soft_drinks-name">Nome</label>
        <input type="text" class="rounded border-gray-400" value="{{ old('name', isset($softDrink) ? $softDrink->name : '') }}" name="name" id="soft_drinks-name" required>
    </div>
    <div class="flex flex-col pr-2">
        <label for="soft_drinks-name">CL</label>
        <input type="text" class="rounded border-gray-400" value="{{ old('cl', isset($softDrink) ? $softDrink->cl : '') }}" name="cl" id="soft_drinks-name">
    </div>

    <div class="flex flex-col pl-2">
        <label for="soft_drinks-price">Prezzo</label>
        <input type="text" class="rounded border-gray-400" value="{{ old('price', isset($softDrink) ?  $softDrink->price : '') }}" id="soft_drinks-price" name="price">
        <span class="text-sm">*decimali con il punto</span>
    </div>
</div>
<div class="flex flex-col">
    <label for="soft_drinks-description">Descrizione</label>
    <textarea name="description" class="rounded border-gray-400" id="soft_drinks-description" cols="30" rows="5" style="margin-bottom: 20px">{{ old('description', isset($softDrink) ?  $softDrink->description : '') }}</textarea>
</div>
