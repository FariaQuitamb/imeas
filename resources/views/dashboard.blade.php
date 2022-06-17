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
                                <x-card-dashboard :value="$department->eclesiastic()->count()" :title="$department->name">
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
                            <div class="flex flex-col mb-12 overflow-hidden bg-white rounded-md cursor-pointer">
                            </div>

                            <div class="lg:grid lg:grid-cols-2 lg:gap-8">
                                <div class="flex flex-col mb-12 overflow-hidden bg-white rounded-md cursor-pointer">
                                    <div class="flex-shrink-0 w-full h-48 text-center align-middle bg-slate-500">
                                        <span
                                            class="inline-block mt-10 font-black text-white text-8xl">{{ sprintf('%02d', $members->count()) }}</span>
                                        <h3 class="font-semibold leading-none tracking-tighter text-white">
                                            Total de membros</h3>
                                    </div>
                                    <div class="flex p-4">
                                        <div class="flex pt-6 space-x-1 text-sm text-gray-500">
                                            <time datetime="2020-03-10">Último registo </time>
                                            <span aria-hidden="true"> · </span>
                                            <span> {{ $lastRegister }} </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-col mb-12 overflow-hidden bg-white rounded-md cursor-pointer">
                                    <div class="flex-shrink-0 w-full h-48 text-center align-middle bg-green-500">
                                        <span
                                            class="inline-block mt-10 font-black text-white text-8xl">{{ sprintf('%02d', $members->count()) }}</span>
                                        <h3 class="font-semibold leading-none tracking-tighter text-white">
                                            Membros enquadrados</h3>
                                    </div>
                                    <div class="flex p-4">
                                        <div class="flex pt-6 space-x-1 text-sm text-gray-500">
                                            <time datetime="2020-03-10">Último registo </time>
                                            <span aria-hidden="true"> · </span>
                                            <span> {{ $lastRegister }} </span>
                                        </div>
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
