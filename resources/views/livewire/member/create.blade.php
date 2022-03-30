<div>
<x-guest-layout>
    <section class="mx-auto lg:w-1/2">
        <div class="container items-center py-12 lg:px-20">
          <div class="flex flex-col w-full max-w-md p-10 mx-auto my-6 transition duration-500 ease-in-out transform bg-white rounded-lg md:mt-0">
            <div class="mt-8">
              <section class="flex flex-col w-full h-full p-1 overflow-auto">
                <header class="flex flex-col items-center justify-center py-12 text-base transition duration-500 ease-in-out transform bg-white border border-dashed rounded-lg text-slate-500 focus:border-blue-500 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
                  <p class="flex flex-wrap justify-center mb-3 text-base leading-7 text-slate-500">
                    <span>Melhore o seu perfil, carregue uma foto</span>
                  </p>
                  <button class="w-auto px-2 py-1 my-2 mr-2 transition duration-500 ease-in-out transform border rounded-md text-slate-500 hover:text-slate-600 text-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-slate-100"> Selecionar foto </button>
                </header>
              </section>
              <div class="mt-6">
                <form action="#" method="POST" class="space-y-6">
                  <div>
                    <label for="text" class="block text-sm font-medium text-neutral-600">Nome completo </label>
                    <input class="block w-full px-5 py-3 mt-2 text-base placeholder-gray-300 transition duration-500 ease-in-out transform bg-gray-100 border border-transparent rounded-lg text-neutral-600 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-blue-300 apearance-none autoexpand" id="description" type="text" name="description" placeholder="Informe o seu nome" required="">
                  </div>
                  <div class="grid grid-cols-1 gap-2 lg:grid-cols-2">
                    <div>
                      <label for="father" class="block text-sm font-medium text-neutral-600"> Nome do pai </label>
                      <div class="mt-1">
                        <input id="father" name="father" type="text" autocomplete="father" required="" placeholder="informe o nome do pai" class="block w-full px-5 py-3 text-base placeholder-gray-300 transition duration-500 ease-in-out transform bg-gray-100 border border-transparent rounded-lg text-neutral-600 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                      </div>
                    </div>
                    <div class="space-y-1">
                      <label for="mother" class="block text-sm font-medium text-neutral-600"> Nome da mãe </label>
                      <div class="mt-1">
                        <input id="mother" name="mother" type="text" autocomplete="mother" required="" placeholder="informe nome da mãe" class="block w-full px-5 py-3 text-base placeholder-gray-300 transition duration-500 ease-in-out transform bg-gray-100 border border-transparent rounded-lg text-neutral-600 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                      </div>
                    </div>
                  </div>

                  <div>
                    <button type="submit" class="flex items-center justify-center w-full px-10 py-4 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-purple-600 rounded-xl hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"> Registar </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </x-guest-layout>
</div>
