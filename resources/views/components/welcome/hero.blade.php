<div>
    <section>
        <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 md:px-12 lg:px-24 lg:py-24">
            <div class="flex flex-wrap items-center mx-auto max-w-7xl">
                <div class="w-full lg:max-w-lg lg:w-1/2 rounded-xl">
                    <div>
                        <div class="relative w-full max-w-lg">
                            <div
                                class="absolute top-0 rounded-full bg-violet-300 -left-4 w-72 h-72 mix-blend-multiply filter blur-xl opacity-70 animate-blob">
                            </div>
                            <div
                                class="absolute rounded-full bg-fuchsia-300 -bottom-24 right-20 w-72 h-72 mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000">
                            </div>
                            <div class="relative">
                                <img class="object-cover object-center mx-auto w-100" alt="hero"
                                    src="{{ asset('images/hero.png') }}" width="">
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="flex flex-col items-start mt-12 mb-16 text-left lg:flex-grow lg:w-1/2 lg:pl-6 xl:pl-24 md:mb-0 xl:mt-0">
                    <p class="mb-8 text-base leading-relaxed text-left text-gray-500">Ao fazer este registo auxilias o
                        Gabinete Pastoral, Organismos e Classes na recolha de dados para melhor tomar as decisões. </p>

                    <h1
                        class="text-4xl font-bold leading-none tracking-tighter text-neutral-600 md:text-7xl lg:text-5xl">
                        Podes fazer:</h1>
                    <div class="flex-col mt-0 lg:mt-6 max-w-7xl sm:flex">
                        <dl class="grid grid-cols-1 gap-12 md:grid-cols-2">
                            <a href="{{route('member.register')}}"
                                class="inline-block p-4 transition ease-in-out delay-150 rounded-lg hover:border hover:bg-slate-100">
                                <dt
                                    class="inline-flex items-center justify-center flex-shrink-0 w-12 h-12 mb-5 text-blue-600 rounded-full bg-blue-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                                    </svg>
                                </dt>
                                <dd class="flex-grow ">
                                    <h2 class="mb-3 text-lg font-medium tracking-tighter text-neutral-600"> Registo individual
                                    </h2>
                                    <p class="text-base leading-relaxed text-gray-400">Se apenas és o único membro da sua família que frequenta este templo, use está opção.</p>
                                </dd>
                            </a>

                            <a href="{{route('family.register')}}"
                                class="inline-block p-4 transition ease-in-out delay-150 rounded-lg hover:border hover:bg-slate-100 ">
                                <dt
                                    class="inline-flex items-center justify-center flex-shrink-0 w-12 h-12 mb-5 text-blue-600 rounded-full bg-blue-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                                    </svg>
                                </dt>
                                <dd class="flex-grow ">
                                    <h2 class="mb-3 text-lg font-medium tracking-tighter text-neutral-600"> Registo familiar
                                    </h2>
                                    <p class="text-base leading-relaxed text-gray-400">Se outros membros da sua família frequentam este templo, use está opção</p>
                                </dd>
                            </a>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
