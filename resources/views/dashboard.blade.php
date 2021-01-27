<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto grid grid-cols-2 sm:px-6 lg:px-8">
            <div class="mr-2">
                <h1 class="block text-center text-xl pb-3">Produtos</h1>
                @include('produtos')
            </div>
            <div class="ml-2">
                <h1 class="block text-center text-xl pb-3">Receitas</h1>
                @include('receitas')
            </div>

        </div>

    </div>
</x-app-layout>
