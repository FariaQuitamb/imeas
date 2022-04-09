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
                        @if(!session('member_registred'))
                            <livewire:member.create>
                        @else
                            <livewire:member.eclesiastic-form>
                        @endif
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
