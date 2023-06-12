<div class="py-3 flex flex-row justify-between">
    <div class="flex flex-col pr-2">
        <label for="bitter_drinks-name">Nome</label>
        <input type="text" class="rounded border-gray-400" value="{{ old('name', isset($bitterDrink) ? $bitterDrink->name : '') }}" name="name" id="bitter_drinks-name" required>
    </div>
    <div class="flex flex-col pr-2">
        <label for="bitter_drinks-name">CL</label>
        <input type="text" class="rounded border-gray-400" value="{{ old('cl', isset($bitterDrink) ? $bitterDrink->cl : '') }}" name="cl" id="bitter_drinks-name">
    </div>

    <div class="flex flex-col pl-2">
        <label for="bitter_drinks-price">Prezzo</label>
        <input type="text" class="rounded border-gray-400" value="{{ old('price', isset($bitterDrink) ?  $bitterDrink->price : '') }}" id="bitter_drinks-price" name="price">
        <span class="text-sm">*decimali con il punto</span>
    </div>
</div>
<div class="flex flex-col">
    <label for="bitter_drinks-description">Descrizione</label>
    <textarea name="description" class="rounded border-gray-400" id="bitter_drinks-description" cols="30" rows="5" style="margin-bottom: 20px">{{ old('description', isset($bitterDrink) ?  $bitterDrink->description : '') }}</textarea>
</div>
