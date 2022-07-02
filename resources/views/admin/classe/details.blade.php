<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ $classe->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-8xl sm:px-6 lg:px-8">

            <section>

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 ">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Membro
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Idade
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Categoria
                                </th>
                                <th scope="col" class="px-6 py-3">
                                   Contacto
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($eclesiastics as $eclesiastic )
                            <tr class="bg-white border-b">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                   {{$eclesiastic->member->name}}
                                </th>
                                <td class="px-6 py-4">
                                    {{\Carbon\Carbon::parse($eclesiastic->member->birthdate)->diff(\Carbon\Carbon::now())->format('%y anos')}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$eclesiastic->baptized ? 'Baptizado' : 'N/Baptizado'}}
                                </td>
                                <td class="px-6 py-4">
                                   {{$eclesiastic->member->phone}}
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>

            </section>

        </div>
    </div>
</x-app-layout>
