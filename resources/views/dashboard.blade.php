<x-app-layout>
    <x-slot name="header">
        <h1 class="font-bold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h1>
    </x-slot>

    <div class="py-8">
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="">
                <h2 class="block text-xl">Produtos</h2>
                @include('produtos')
            </div>
            <div class="">
                <h1 class="block text-center text-xl pb-3">Receitas</h1>
                @include('receitas')
            </div>

        </div>

    </div>
</x-app-layout>
