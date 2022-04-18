<div>
    <form autocomplete="off" wire:submit.prevent='verifyMember' method="POST" class="space-y-6">
        {{-- x-data x-mask.blocks="[1, 3, 3, 3]"--}}
        <div>
            <label for="text" class="block text-sm font-medium text-neutral-600">Número de membro, recebido por SMS </label>
            <input
                class="block w-full px-5 py-3 mt-2 text-base placeholder-gray-300 transition duration-500 ease-in-out transform bg-gray-100 border border-transparent rounded-lg text-neutral-600 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-blue-300 apearance-none autoexpand"
                id="membernumber" autocomplete="false" type="text" wire:model.lazy="code" placeholder="Informe o número de membro">
            <x-assets.input-error for="code" message='' />

        </div>
        <div>
            <button type="submit"
                class="flex items-center justify-center w-full px-10 py-4 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-purple-600 rounded-xl hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Verificar dados</button>
        </div>
    </form>
</div>
