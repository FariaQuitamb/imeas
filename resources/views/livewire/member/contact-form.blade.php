<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}

    <div>
        <div>
            <form autocomplete="off" wire:submit='submit' method="POST" class="space-y-6">
                {{-- Occupations --}}
                <div>
                    <label for="text" class="block mb-2 text-sm font-medium text-neutral-600">Qual é a sua ocupação</label>
                    <div class="flex space-x-5">
                        @foreach ($occupations as $occupation)
                        <label for="occupation.{{$occupation->id}}" class="block text-sm font-medium text-neutral-600">
                            <input type="checkbox" id="occupation.{{$occupation->id}}"
                            wire:model.blur="occupation.{{$occupation}}" value="{{$occupation->id}}"> {{$occupation->name}}</label>
                        @endforeach
                    </div>
                    <x-assets.input-error for="occupation" message='' />

                </div>

                {{-- Degree --}}
                <div>
                    <label for="degree" class="block text-sm font-medium text-neutral-600">Grau acadêmico</label>
                    <select id="degree" wire:model="degree" type="text"
                        class="block w-full px-5 py-3 text-base placeholder-gray-300 transition duration-500 ease-in-out transform bg-gray-100 border border-transparent rounded-lg text-neutral-600 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                        <option selected >Selecione a seu organismo</option>
                        @if ($degrees)
                            @foreach ($degrees as $degree)
                                <option value="{{ $degree->id }}">{{ $degree->name }}</option>
                            @endforeach
                        @endif
                    </select>
                    <x-assets.input-error for="degree" message='' />
                </div>

               {{-- Courses --}}
               <div>
                <label for="text" class="block mb-2 text-sm font-medium text-neutral-600">Qual é a profissão</label>
                <div class="flex space-x-5">
                    @foreach ($courses as $course)
                    <label for="course.{{$course->id}}" class="block text-sm font-medium text-neutral-600">
                        <input type="radio" id="course.{{$course->id}}"
                        wire:model.blur="work" value="{{$course->id}}"> {{$course->name}}</label>
                    @endforeach
                </div>
                <x-assets.input-error for="work" message='' />

            </div>

                <div>
                    <button type="submit"
                        class="flex items-center justify-center w-full px-10 py-4 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-purple-600 rounded-xl hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Salvar e concluir
                    </button>
                </div>
            </form>
        </div>

    </div>

</div>
