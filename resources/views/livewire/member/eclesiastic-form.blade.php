<div>
    <div>
        <form autocomplete="off" wire:submit.prevent='savePersonalInformation' method="POST" class="space-y-6">

            {{-- Start at --}}
            <div>
                <label for="text" class="block text-sm font-medium text-neutral-600">Em que ano se torno
                    metodista?</label>
                <select id="startat" wire:model.lazy="startat"
                    class="block w-full px-5 py-3 text-base placeholder-gray-300 transition duration-500 ease-in-out transform bg-gray-100 border border-transparent rounded-lg text-neutral-600 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                    <option selected disabled>Ano de início</option>
                    @for ($i = date('Y') - 100; $i <= date('Y'); $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                <x-assets.input-error for="startat" message='' />
            </div>

            {{-- How do you start? --}}
            <div>
                <label for="text" class="block mb-2 text-sm font-medium text-neutral-600">Como se tornou membro</label>
                <div class="flex space-x-5">
                    <label for="man" class="block text-sm font-medium text-neutral-600"><input type="radio" id="man"
                            wire:model.lazy="genre" value="F"> Família</label>
                    <label for="woman" class="block text-sm font-medium text-neutral-600"><input id="woman" type="radio"
                            wire:model.lazy="genre" value="E"> Evangelismo</label>
                    <label for="woman" class="block text-sm font-medium text-neutral-600"><input id="woman" type="radio"
                            wire:model.lazy="genre" value="IP"> Iniciativa pessoal</label>
                </div>
                <x-assets.input-error for="genre" message='' />

            </div>

            {{-- Classe --}}
            <div>
                <label for="fathaer" class="block text-sm font-medium text-neutral-600">Classe</label>
                <select id="county" wire:model.lazy="county"
                    class="block w-full px-5 py-3 text-base placeholder-gray-300 transition duration-500 ease-in-out transform bg-gray-100 border border-transparent rounded-lg text-neutral-600 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                    <option selected disabled>Selecione a sua classe</option>
                    @if ($classes)
                        @foreach ($classes as $classe)
                            <option value="{{ $classe->id }}">{{ $classe->nome }}</option>
                        @endforeach
                    @endif

                </select>
                <x-assets.input-error for="county" message='' />
            </div>
            {{-- Organismo --}}
            <div>
                <label for="mother" class="block text-sm font-medium text-neutral-600">Organismo</label>
                <select id="province" wire:model="province" type="text"
                    class="block w-full px-5 py-3 text-base placeholder-gray-300 transition duration-500 ease-in-out transform bg-gray-100 border border-transparent rounded-lg text-neutral-600 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                    <option disabled selected>Organismo</option>
                    @if ($organismos)
                        @foreach ($organismos as $organismo)
                            <option value="{{ $organismo->id }}">{{ $organismo->nome }}</option>
                        @endforeach
                    @endif
                </select>
                <x-assets.input-error for="province" message='' />
            </div>
            {{-- Ministeries --}}
            <div>
                <label for="text" class="block mb-2 text-sm font-medium text-neutral-600">Em quais ministérios se dedicas</label>
                <label for="coralLouvores" class="block text-sm font-medium text-neutral-600"><input id="coralLouvores" type="checkbox"
                    wire:model.lazy="genre" value="S"> Coral e Louvores</label>
                    <label for="coralLouvores" class="block text-sm font-medium text-neutral-600"><input id="coralLouvores" type="checkbox"
                        wire:model.lazy="genre" value="S"> Evangelismo e Ensino</label>
                        <label for="coralLouvores" class="block text-sm font-medium text-neutral-600"><input id="coralLouvores" type="checkbox"
                            wire:model.lazy="genre" value="S"> Oferta e caridade</label>
                <x-assets.input-error for="birthdate" message='' />
            </div>

            <div class="">
                <label for="genre" class="block text-sm font-medium text-neutral-600">Baptizado?</label>
                <div class="flex space-x-5">
                    <label for="man" class="block text-sm font-medium text-neutral-600"><input type="radio" id="man"
                            wire:model.lazy="genre" value="S"> Sim</label>
                    <label for="woman" class="block text-sm font-medium text-neutral-600"><input id="woman" type="radio"
                            wire:model.lazy="genre" value="N"> Não</label>
                </div>
                <x-assets.input-error for="genre" message='' />
            </div>
            <div>
                <button type="submit"
                    class="flex items-center justify-center w-full px-10 py-4 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-purple-600 rounded-xl hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Salvar e prosseguir</button>
            </div>
        </form>
    </div>

</div>
