<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center font-bold">
                    <h1 class="text-3xl">
                        {{ __("Bentornato " .  ucfirst(strtolower(Auth::user()->name))  ) }}
                    </h1>

                    <div class="py-5">
                        <h1 class="my-8">Ecco le tue liste</h1>
                        <a href="{{ route('admin.aperitifs.index') }}" class="bg-slate-400 hover:text-white  text-white p-2 rounded-lg">{{ __('Aperitivi') }}</a>
                        <a href="{{ route('admin.desserts.index') }}" class="bg-slate-400 hover:text-white  text-white p-2 rounded-lg">{{ __('Desserts') }}</a>
                        <a href="{{ route('admin.long_drinks.index') }}" class="bg-slate-400 hover:text-white  text-white p-2 rounded-lg">{{ __('Long Drinks') }}</a>
                        <a href="{{ route('admin.special_long_drinks.index') }}" class="bg-slate-400 hover:text-white  text-white p-2 rounded-lg">{{ __('Special Long Drinks') }}</a>
                        <a href="{{ route('admin.international_long_drinks.index') }}" class="bg-slate-400 hover:text-white  text-white p-2 rounded-lg">{{ __('International Long Drinks') }}</a>
                        <a href="{{ route('admin.white_wines.index') }}" class="bg-slate-400 hover:text-white  text-white p-2 rounded-lg">{{ __('Vini Bianchi') }}</a>
                        <a href="{{ route('admin.red_wines.index') }}" class="bg-slate-400 hover:text-white  text-white p-2 rounded-lg">{{ __('Vini Rossi') }}</a>
                        <a href="{{ route('admin.beers.index') }}" class="bg-slate-400 hover:text-white  text-white p-2 rounded-lg">{{ __('Birre') }}</a>
                        <a href="{{ route('admin.bitter_drinks.index') }}" class="bg-slate-400 hover:text-white  text-white p-2 rounded-lg">{{ __('Amari') }}</a>
                        <a href="{{ route('admin.whiskies.index') }}" class="bg-slate-400 hover:text-white  text-white p-2 rounded-lg">{{ __('Whiskies') }}</a>
                        <a href="{{ route('admin.soft_drinks.index') }}" class="bg-slate-400 hover:text-white  text-white p-2 rounded-lg">{{ __('Soft Drinks') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
