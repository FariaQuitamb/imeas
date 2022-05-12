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
                    @foreach ($howBecome as $how )
                    <label for="{{$how}}" class="block text-sm font-medium text-neutral-600"><input type="radio" id="{{$how}}"
                        wire:model.lazy="how" value="{{$how}}"> {{$how}}</label>
                    @endforeach
                </div>
                <x-assets.input-error for="how" message='' />

            </div>

            {{-- Classe --}}
            <div>
                <label for="fathaer" class="block text-sm font-medium text-neutral-600">Classe</label>
                <select id="classe" wire:model.lazy="classe"
                    class="block w-full px-5 py-3 text-base placeholder-gray-300 transition duration-500 ease-in-out transform bg-gray-100 border border-transparent rounded-lg text-neutral-600 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                    <option selected>Selecione a sua classe</option>
                    @if ($classes)
                        @foreach ($classes as $classe)
                            <option value="{{ $classe->id }}">{{ $classe->name }}</option>
                        @endforeach
                    @endif

                </select>
                <x-assets.input-error for="classe" message='' />
            </div>
            {{-- Organismo --}}
            <div>
                <label for="department" class="block text-sm font-medium text-neutral-600">Organismo</label>
                <select id="department" wire:model="department" type="text"
                    class="block w-full px-5 py-3 text-base placeholder-gray-300 transition duration-500 ease-in-out transform bg-gray-100 border border-transparent rounded-lg text-neutral-600 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                    <option selected >Selecione a seu organismo</option>
                    @if ($departments)
                        @foreach ($departments as $department)
                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                        @endforeach
                    @endif
                </select>
                <x-assets.input-error for="department" message='' />
            </div>
            {{-- Ministeries --}}
            <div>
                <label for="text" class="block mb-2 text-sm font-medium text-neutral-600">Em quais ministérios se dedicas</label>
                @foreach ($ministries as $ministry )
                <label for="ministry.{{$ministry->id}}" class="block mb-2 text-sm font-medium text-neutral-600"><input id="coralLouvores" type="checkbox"
                    wire:model.lazy="ministry.{{$ministry->id}}" value="{{$ministry->id}}"> {{$ministry->name}}</label>
                @endforeach
                <x-assets.input-error for="ministry" message='' />
            </div>

            <div class="">
                <label for="baptized" class="block text-sm font-medium text-neutral-600">Baptizado?</label>
                <div class="flex space-x-5">
                    <label for="man" class="block text-sm font-medium text-neutral-600"><input type="radio" id="man"
                            wire:model.lazy="baptized" value="S"> Sim</label>
                    <label for="woman" class="block text-sm font-medium text-neutral-600"><input id="woman" type="radio"
                            wire:model.lazy="baptized" value="N"> Não</label>
                </div>
                <x-assets.input-error for="baptized" message=''/>
            </div>
            <div>
                <button type="submit"
                    class="flex items-center justify-center w-full px-10 py-4 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-purple-600 rounded-xl hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Salvar e prosseguir
                </button>
            </div>
        </form>
    </div>

</div>
