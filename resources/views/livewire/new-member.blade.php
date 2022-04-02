<div>
    {{-- Success is as dangerous as failure. --}}
    <div>
        <x-guest-layout>
            <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 md:px-12 lg:px-24">
                <div class="flex flex-wrap items-center mx-auto max-w-7xl">
                    <div class="relative w-full lg:max-w-lg lg:w-1/2 rounded-xl">
                        <div
                            class="absolute top-0 rounded-full bg-violet-300 -left-4 w-96 h-96 mix-blend-multiply filter blur-xl opacity-70 animate-blob">
                        </div>
                        <div
                            class="absolute rounded-full bg-fuchsia-300 -bottom-24 right-20 w-96 h-96 mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000">
                        </div>
                        <div class="container relative items-center">
                            <div
                                class="flex flex-col w-full max-w-md p-10 mx-auto transition duration-500 ease-in-out transform bg-white rounded-lg shadow-xl md:mt-0">
                                {{-- @if (!$avatar)
                                <div>
                                    <p
                                        class="flex flex-wrap justify-center mb-3 text-base leading-7 text-slate-500">
                                        <span>Selecione sua foto</span>
                                    </p>
                                    <input type="file" wire:model="avatar" id="avatar" class="hidden">
                                    <label for="avatar"
                                        class="w-auto px-2 py-1 my-2 mr-2 transition duration-500 ease-in-out transform border rounded-md cursor-pointer text-slate-200 hover:text-slate-600 text-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-slate-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24 "
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </label>
                                </div>
                            @else
                                <img src="{{ $avatar->temporaryUrl() }}" alt="">
                            @endif --}}
                                <form wire:submit.prevent='savePersonalInformation' method="POST" class="space-y-6">
                                    <header
                                        class="flex flex-col items-center justify-center w-56 mx-auto text-base transition duration-500 ease-in-out transform bg-white border border-dashed rounded-lg text-slate-500 focus:border-blue-500 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">

                                    </header>
                                    <div>
                                        <label for="text" class="block text-sm font-medium text-neutral-600">Nome
                                            completo </label>
                                        <input
                                            class="block w-full px-5 py-3 mt-2 text-base placeholder-gray-300 transition duration-500 ease-in-out transform bg-gray-100 border border-transparent rounded-lg text-neutral-600 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-blue-300 apearance-none autoexpand"
                                            id="fullname" type="text" name="fullname" placeholder="Informe o seu nome">
                                    </div>

                                    <div>
                                        <label for="fathaername" class="block text-sm font-medium text-neutral-600">Nome do
                                            pai</label>
                                        <input
                                            class="block w-full px-5 py-3 mt-2 text-base placeholder-gray-300 transition duration-500 ease-in-out transform bg-gray-100 border border-transparent rounded-lg text-neutral-600 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-blue-300 apearance-none autoexpand"
                                            id="fathername" type="text" name="fathername" placeholder="Informe o seu nome">
                                    </div>

                                    <div>
                                        <label for="mothername" class="block text-sm font-medium text-neutral-600">Nome da
                                            Mãe</label>
                                        <input
                                            class="block w-full px-5 py-3 mt-2 text-base placeholder-gray-300 transition duration-500 ease-in-out transform bg-gray-100 border border-transparent rounded-lg text-neutral-600 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-blue-300 apearance-none autoexpand"
                                            id="mothername" type="text" name="mothername" placeholder="Informe o seu nome">
                                    </div>

                                    <div>
                                        <label for="text" class="block text-sm font-medium text-neutral-600">Data de
                                            Nascimento</label>
                                        <input x-data x-mask.date
                                            class="block w-full px-5 py-3 mt-2 text-base placeholder-gray-300 transition duration-500 ease-in-out transform bg-gray-100 border border-transparent rounded-lg datepicker text-neutral-600 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-blue-300 apearance-none autoexpand"
                                            name="birthdate" placeholder="Informe a sua data de nascimento">
                                    </div>

                                    <div class="">
                                        <label for="genre" class="block text-sm font-medium text-neutral-600">Género</label>
                                        <div class="flex space-x-5">
                                            <label for="man" class="block text-sm font-medium text-neutral-600"><input
                                                    type="radio" id="man" name="genre" value="M"> Masculino</label>
                                            <label for="woman" class="block text-sm font-medium text-neutral-600"><input
                                                    id="woman" type="radio" name="genre" value="M"> Feminino</label>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="father" class="block text-sm font-medium text-neutral-600">Natural de
                                        </label>
                                        <div class="grid grid-cols-1 gap-2 lg:grid-cols-2">
                                            <div class="mt-1">
                                                <select id="mother" name="mother" type="text"
                                                    class="block w-full px-5 py-3 text-base placeholder-gray-300 transition duration-500 ease-in-out transform bg-gray-100 border border-transparent rounded-lg text-neutral-600 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                                    <option selected disabled>Província</option>
                                                </select>
                                            </div>
                                            <div class="mt-1">
                                                <select id="mother" name="mother" type="text"
                                                    class="block w-full px-5 py-3 text-base placeholder-gray-300 transition duration-500 ease-in-out transform bg-gray-100 border border-transparent rounded-lg text-neutral-600 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                                    <option selected disabled>Município</option>
                                                </select>
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
                        </div>
                    </div>
                    <div
                        class="flex flex-col items-start mt-12 mb-16 text-left lg:flex-grow lg:w-1/2 lg:pl-6 xl:pl-24 md:mb-0 xl:mt-0">
                        <h1 class="mb-4 uppercase text-medium ">Registe as seguintes informações</h1>
                        <x-register-features></x-register-features>
                    </div>
                </div>
            </div>
        </x-guest-layout>
    </div>
</div>
