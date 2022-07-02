<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-8xl sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <section>
                    <div class="relative max-w-full mx-auto">
                        <div class="grid gap-6 p-4 mx-auto md:grid-cols-5">
                            @foreach ($departments as $department)
                                <x-card-dashboard :value="$department->eclesiastics()->count()" :title="$department->name">
                                    {!! $department->icon !!}
                                </x-card-dashboard>
                            @endforeach
                        </div>
                    </div>
                </section>

                <section>
                    <div class="relative w-full mx-auto">
                        <div
                            class="grid max-w-lg gap-8 p-4 mx-auto md:grid-cols-2 md:max-w-none lg:grid-cols-2 lg:max-w-none">
                            <div class="flex flex-col overflow-hidden bg-white rounded-md cursor-pointer">
                                <div class="flex p-4 font-medium text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                      </svg>
                                    <h2 class="text-2xl leading-none">Classes</h2>
                                </div>
                                @foreach ($classes as $classe)
                                <div class="p-4 border-b sm:flex lg:items-end group">
                                    <div class="flex-shrink-0 sm:mb-0 sm:mr-4">
                                        <span
                                            class="inline-block text-3xl font-black text-slate-800">{{ sprintf('%02d', $classe->eclesiastic()->count()) }}</span>
                                    </div>
                                    <div class="ml-4">
                                      <p class="mt-3 text-lg font-medium leading-6">
                                        <a href="{{route('classe.details', $classe->slug)}}" class="text-xl text-gray-800 group-hover:text-gray-500 lg:text-2xl">{{$classe->name}} </a>
                                      </p>
                                      <span class="text-sm text-gray-500">Bernanda Manuel</span>
                                      <p class="text-gray-500">
                                        Na casa da mãe Catarina
                                      </p>
                                    </div>
                                  </div>
                                @endforeach

                            </div>

                            <div class=" lg:grid h-fit lg:grid-cols-2 lg:gap-8">
                                <div class="flex flex-col mb-12 overflow-hidden bg-white rounded-md cursor-pointer">
                                    <div class="flex-shrink-0 w-full h-48 text-center align-middle bg-slate-500">
                                        <span
                                            class="inline-block mt-10 font-black text-white text-8xl">{{ sprintf('%02d', count($members)) }}</span>
                                        <h3 class="font-semibold leading-none tracking-tighter text-white">
                                            Total de membros</h3>
                                    </div>
                                    <div class="flex p-4">
                                        <div class="flex space-x-1 text-sm text-gray-500">
                                            <time datetime="2020-03-10">Último registo </time>
                                            <span aria-hidden="true"> · </span>
                                            <span> {{ $lastRegister }} </span>
                                        </div>
                                    </div>
                                    <div class="flex justify-between px-4 mb-3">
                                        <span class="font-bold text-gray-500 text-medium">Homens</span>
                                        <span class="font-medium">{{count($members->where('genre', 'M'))}}</span>
                                    </div>
                                    <div class="flex justify-between px-4 mb-3">
                                        <span class="font-bold text-gray-500 text-medium">Mulheres</span>
                                        <span class="font-medium">{{count($members->where('genre', 'F'))}}</span>
                                    </div>
                                    <div class="flex justify-between px-4 mb-3">
                                        <span class="font-bold text-gray-500 text-medium">Crianças</span>
                                        <span class="font-medium">{{$members->where('genre', 'M')->count()}}</span>
                                    </div>
                                </div>

                                <div class="flex flex-col mb-12 overflow-hidden bg-white rounded-md cursor-pointer h-fit">
                                    <div class="flex-shrink-0 w-full h-48 text-center align-middle bg-green-500">
                                        <span
                                            class="inline-block mt-10 font-black text-white text-8xl">{{ sprintf('%02d', $relatedMembers->count()) }}</span>
                                        <h3 class="font-semibold leading-none tracking-tighter text-white">
                                            Membros enquadrados</h3>
                                    </div>
                                    <div class="flex p-4">
                                        <div class="flex space-x-1 text-sm text-gray-500">
                                            <time datetime="2020-03-10">Último registo </time>
                                            <span aria-hidden="true"> · </span>
                                            <span> {{ $lastRelated }} </span>
                                        </div>
                                    </div>
                                    <div class="flex justify-between px-4 mb-3">
                                        <span class="font-bold text-gray-500 text-medium">Idosos</span>
                                        <span class="font-medium">2</span>
                                    </div>
                                    <div class="flex justify-between px-4 mb-3">
                                        <span class="font-bold text-gray-500 text-medium">Suspensos</span>
                                        <span class="font-medium">100</span>
                                    </div>

                                    <div class="flex justify-between px-4 mb-3">
                                        <span class="font-bold text-gray-500 text-medium">Casados</span>
                                        <span class="font-medium">100</span>
                                    </div>
                                    <div class="flex justify-between px-4 mb-3">
                                        <span class="font-bold text-gray-500 text-medium">Solteiros</span>
                                        <span class="font-medium">100</span>
                                    </div>
                                    <div class="flex justify-between px-4 mb-3">
                                        <span class="font-bold text-gray-500 text-medium">Trabahadores</span>
                                        <span class="font-medium">100</span>
                                    </div>
                                    <div class="flex justify-between px-4 mb-3">
                                        <span class="font-bold text-gray-500 text-medium">N/Trabalhadores</span>
                                        <span class="font-medium">100</span>
                                    </div>
                                    <div class="flex justify-between px-4 mb-3">
                                        <span class="font-bold text-gray-500 text-medium">Estudantes</span>
                                        <span class="font-medium">100</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
