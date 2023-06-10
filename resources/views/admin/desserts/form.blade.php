<div class="py-3 flex flex-row justify-between">
    <div class="flex flex-col pr-2">
        <label for="dessert-name">Nome</label>
        <input type="text" class="rounded border-gray-400" value="{{ old('name', isset($dessert) ? $dessert->name : '') }}" name="name" id="dessert-name" required>
    </div>

    <div class="flex flex-col pl-2">
        <label for="aperitif-price">Prezzo</label>
        <input type="text" class="rounded border-gray-400" value="{{ old('price', isset($dessert) ?  $dessert->price : '') }}" id="dessert-price" name="price">
    </div>
</div>
<div class="flex flex-col">
    <label for="dessert-description">Descrizione</label>
    <textarea name="description" class="rounded border-gray-400" id="dessert-description" cols="30" rows="5" style="margin-bottom: 20px">{{ old('description', isset($dessert) ?  $dessert->description : '') }}</textarea>
</div>
