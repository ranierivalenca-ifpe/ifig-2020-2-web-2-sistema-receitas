<div x-data="{ add_modal: false }">
    <div class="my-4 bg-white overflow-hidden">
        <div class="border-b border-gray-200">
            <!-- Listando produtos -->
            <table class="w-full divide-y divide-solid divide-gray-200">
                <tr class="text-left">
                    <th>Tipo</th>
                    <th>Marca</th>
                    <th>Quantidade</th>
                    <th></th>
                </tr>
                <tbody class="divide-y divide-gray-200">

                    @foreach(Auth::user()->produtos->sortBy('tipo') as $produto)
                        <tr class="hover:bg-gray-100">
                            <td class="py-2">{{ $produto->tipo }}</td>
                            <td>{{ $produto->marca }}</td>
                            <td>{{ $produto->estoque }}</td>
                            <td>
                                <a class="font-semibold hover:text-indigo-500 m-2 py-1 px-4" href="">
                                    Editar
                                </a>
                                <a class="font-semibold hover:text-red-500 m-2 py-1 px-4" href="{{ route('rm-produto', $produto) }}">
                                    Excluir
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    <tr class="bg-yellow-200">
                        <td colspan="4" class="">
                            <a class="text-center block w-full font-semibold hover:text-indigo-500 m-2 py-1 cursor-pointer" @click="add_modal = true">
                                Adicionar
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
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
                <h1>Adicionar produto</h1>
                <!-- <form action="{{ action([\App\Http\Controllers\ProdutoController::class, 'store']) }}" method="POST"> -->
                <form action="{{ route('add-produto') }}" method="POST">
                    @csrf

                    <div>
                        <x-label for="tipo" :value="__('Tipo')" />

                        <x-input id="tipo" class="block mt-1 w-full" type="text" name="tipo" :value="old('tipo')" required />
                    </div>
                    <div>
                        <x-label for="marca" :value="__('marca')" />

                        <x-input id="marca" class="block mt-1 w-full" type="text" name="marca" :value="old('marca')" required />
                    </div>
                    <div>
                        <x-label for="estoque" :value="__('estoque')" />

                        <x-input id="estoque" class="block mt-1 w-full" type="number" name="estoque" :value="old('estoque')" required />
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