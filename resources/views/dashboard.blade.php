<x-app-layout>
    <x-slot name="header">
        <h1 class="font-bold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h1>
    </x-slot>

    <div class="py-8">
        <div class="mx-4">
            <div class="border-gray-400 border-2 shadow-md p-2">
                <h2 class="block text-xl border-gray-400 border-b py-2">Produtos</h2>
                @include('produtos')
            </div>
            <div class="border-gray-400 border-2 border-gray-400 shadow-md p-2 mt-8">
                <h2 class="block text-xl border-gray-400 border-b py-2">Receitas</h2>
                @include('receitas')
            </div>

        </div>

    </div>
</x-app-layout>
