<div>
    <form autocomplete="off" wire:submit='savePersonalInformation' method="POST" class="space-y-6">
        <header
            class="flex flex-col items-center justify-center w-56 mx-auto text-base transition duration-500 ease-in-out transform bg-white border border-dashed rounded-lg text-slate-500 focus:border-blue-500 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
            @if (!$avatar)
                <div>
                    <p class="flex flex-wrap justify-center mb-3 text-base leading-7 text-slate-500">
                        <span>Selecione sua foto</span>
                    </p>
                    <input type="file" wire:model="avatar" id="avatar" class="hidden" style="display: none">
                    <label for="avatar"
                        class="flex justify-center w-auto px-2 py-1 mb-4 transition duration-500 ease-in-out transform border rounded-md cursor-pointer text-slate-200 hover:text-slate-600 text-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-slate-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </label>
                </div>
            @else
                <div>
                    <input type="file" wire:model="avatar" id="avatar" class="hidden" style="display: none">
                    <label for="avatar" class="cursor-pointer"> <img src="{{ $avatar->temporaryUrl() }}"
                            alt=""></label>
                </div>
            @endif
            <x-assets.input-error for="avatar" message='' />
        </header>
        {{-- Full name --}}
        <div>
            <label for="text" class="block text-sm font-medium text-neutral-600">Nome
                completo </label>
            <input
                class="block w-full px-5 py-3 mt-2 text-base placeholder-gray-300 transition duration-500 ease-in-out transform bg-gray-100 border border-transparent rounded-lg text-neutral-600 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-blue-300 apearance-none autoexpand"
                id="fullname" autocomplete="false" type="text" wire:model.blur="name" placeholder="Informe o seu nome">
            <x-assets.input-error for="name" message='' />

        </div>

        {{-- Phone number --}}
        <div>
            <label for="text" class="block text-sm font-medium text-neutral-600">Telefone</label>
            <input x-data x-mask.blocks="[3, 2, 2, 2]" maxlength="12"
                class="block w-full px-5 py-3 mt-2 text-base placeholder-gray-300 transition duration-500 ease-in-out transform bg-gray-100 border border-transparent rounded-lg text-neutral-600 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-blue-300 apearance-none autoexpand"
                id="fullname" autocomplete="false" type="text" wire:model.blur="phone"
                placeholder="Informe o número do telemóvel">
            <x-assets.input-error for="phone" message='' />

        </div>

        {{-- Father name --}}
        <div>
            <label for="fathaer" class="block text-sm font-medium text-neutral-600">Nome do
                pai</label>
            <input
                class="block w-full px-5 py-3 mt-2 text-base placeholder-gray-300 transition duration-500 ease-in-out transform bg-gray-100 border border-transparent rounded-lg text-neutral-600 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-blue-300 apearance-none autoexpand"
                id="father" type="text" wire:model.blur="father" placeholder="Informe o seu nome">
            <x-assets.input-error for="father" message='' />
        </div>

        <div>
            <label for="mother" class="block text-sm font-medium text-neutral-600">Nome da
                Mãe</label>
            <input
                class="block w-full px-5 py-3 mt-2 text-base placeholder-gray-300 transition duration-500 ease-in-out transform bg-gray-100 border border-transparent rounded-lg text-neutral-600 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-blue-300 apearance-none autoexpand"
                id="mother" type="text" wire:model.blur="mother" placeholder="Informe o seu nome">
            <x-assets.input-error for="mother" message='' />
        </div>

        <div>
            <label for="text" class="block text-sm font-medium text-neutral-600">Data de
                Nascimento</label>
            <input x-data x-mask.date
                class="block w-full px-5 py-3 mt-2 text-base placeholder-gray-300 transition duration-500 ease-in-out transform bg-gray-100 border border-transparent rounded-lg datepicker text-neutral-600 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-blue-300 apearance-none autoexpand"
                wire:model.blur="birthdate" placeholder="Informe a sua data de nascimento">
            <x-assets.input-error for="birthdate" message='' />
        </div>

        <div class="">
            <label for="genre" class="block text-sm font-medium text-neutral-600">Género</label>
            <div class="flex space-x-5">
                <label for="man" class="block text-sm font-medium text-neutral-600"><input type="radio" id="man"
                        wire:model.blur="genre" value="M"> Masculino</label>
                <label for="woman" class="block text-sm font-medium text-neutral-600"><input id="woman" type="radio"
                        wire:model.blur="genre" value="F"> Feminino</label>
            </div>
            <x-assets.input-error for="genre" message='' />
        </div>
        <div>
            <label class="block text-sm font-medium text-neutral-600">Natural de
            </label>
            <div class="grid grid-cols-1 gap-2 lg:grid-cols-2">
                <div class="mt-1">
                    <select id="province" wire:model="province" type="text"
                        class="block w-full px-5 py-3 text-base placeholder-gray-300 transition duration-500 ease-in-out transform bg-gray-100 border border-transparent rounded-lg text-neutral-600 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                        <option  disabled selected>Província</option>
                        @foreach ($provinces as $province)
                            <option value="{{ $province['Id_Provincia'] }}">{{ $province['Nome'] }}</option>
                        @endforeach
                    </select>
                    <x-assets.input-error for="province" message='' />
                </div>
                <div class="mt-1">
                    <select id="county" wire:model.blur="county" {{ $counties ? '' : 'disabled' }} type="text"
                        class="block w-full px-5 py-3 text-base placeholder-gray-300 transition duration-500 ease-in-out transform bg-gray-100 border border-transparent rounded-lg text-neutral-600 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                        <option selected disabled>Município</option>
                        @if ($counties)

                            @foreach ($counties as $county)
                                <option value="{{ $county['Id_Municipio'] }}">{{ $county['Nome'] }}</option>
                            @endforeach
                        @endif

                    </select>
                    <x-assets.input-error for="county" message='' />
                </div>
            </div>

        </div>
        <div>
            <button type="submit"
                class="flex items-center justify-center w-full px-10 py-4 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-purple-600 rounded-xl hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Salvar e prosseguir</button>
        </div>
    </form>
</div>


