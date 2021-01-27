<div x-data="{ add_modal: false }">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            <!-- Listando produtos -->
            <div class="grid grid-cols-1">
                <div class="p-3 m-0.5 border rounded-lg bg-green-100 hover:bg-green-200 cursor-pointer" @click="add_modal = true">
                    Adicionar
                </div>
                @foreach(Auth::user()->receitas as $receita)
                    <div class="p-3 m-0.5 border rounded-lg hover:bg-gray-200">
                        {{ $receita->nome }}
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="fixed z-10 inset-0 overflow-y-auto" style="display:none" x-show="add_modal">
      <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <!--
          Background overlay, show/hide based on modal state.

          Entering: "ease-out duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "ease-in duration-200"
            From: "opacity-100"
            To: "opacity-0"
        -->
        <div class="fixed inset-0 transition-opacity" aria-hidden="true" @click="add_modal = false">
          <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <!--
          Modal panel, show/hide based on modal state.

          Entering: "ease-out duration-300"
            From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            To: "opacity-100 translate-y-0 sm:scale-100"
          Leaving: "ease-in duration-200"
            From: "opacity-100 translate-y-0 sm:scale-100"
            To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        -->
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class="p-3">
                <h1>Adicionar receita</h1>
                <!-- <form action="{{ action([\App\Http\Controllers\ProdutoController::class, 'store']) }}" method="POST"> -->
                <form action="" method="POST">
                    @csrf

                    @php
                        $produtos = \App\Models\Produto::where('user_id', Auth::user()->id)->get()->sortBy('tipo')
                    @endphp

                    <select multiple name="" id="" class="w-full block rounded-md">
                        @foreach ($produtos as $produto)
                            <option value="{{ $produto->id }}">{{ $produto->tipo }}</option>
                        @endforeach
                    </select>

                    <div>
                        <x-label for="nome" :value="__('Nome')" />

                        <x-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('nome')" required />
                    </div>
                    <div>
                        <x-label for="preparo" :value="__('Modo de preparo')" />

                        <x-textarea id="preparo" class="mt-1" name="preparo" required>{{ old('preparo') }}</x-textarea>
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-red-600 hover:text-red-900" @click="add_modal = false">
                            {{ __('Cancelar') }}
                        </a>
                        <x-button class="ml-4">
                            {{ __('Adicionar') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
      </div>
    </div>
</div>