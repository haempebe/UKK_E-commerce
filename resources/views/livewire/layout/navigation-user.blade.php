<div>
    <header
        class="flex flex-wrap md:flex-col md:justify-start md:flex-nowrap z-50 w-full bg-neutral-800 border-b border-gray-200 bg-neutral-800 border-neutral-700">
        <div class="max-w-[85rem] mx-auto w-full px-4 sm:px-6 lg:px-8 ">
            <div class="flex justify-between">
                <a href="#" class="text-neutral-300 hover:text-neutral-400 hidden lg:block">
                    <div class="flex gap-x-1 pt-2 text-[12px] items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="shrink-0 size-6">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M6 5a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2v-14z" />
                            <path d="M11 4h2" />
                            <path d="M12 17v.01" />
                        </svg>
                        Try our app
                    </div>
                </a>
                <div class=" flex items-center justify-end gap-x-3 pt-2 ms-auto">
                    <a class="inline-flex justify-center items-center gap-x-2 font-medium text-[12px] text-gray-800 hover:text-neutral-500 focus:outline-none focus:text-neutral-500 text-neutral-200 hover:text-neutral-500 focus:text-neutral-500 hidden md:block"
                        href="#">
                        Tentang Novaxioo
                    </a>
                    <a class="inline-flex justify-center items-center gap-x-1 font-medium text-[12px] text-gray-800 hover:text-neutral-500 focus:outline-none focus:text-neutral-500 text-neutral-200 hover:text-neutral-500 focus:text-neutral-500"
                        href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="shrink-0 size-4">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                            <path d="M12 17l0 .01" />
                            <path d="M12 13.5a1.5 1.5 0 0 1 1 -1.5a2.6 2.6 0 1 0 -3 -4" />
                        </svg>
                        Bantuan
                    </a>

                    <div>
                        <div class="flex flex-wrap items-center gap-x-1.5">
                            @if ($this->isLoggedIn)
                                @if ($this->isAdmin)
                                    <a class="py-[7px] px-3 inline-flex items-center font-medium text-[12px] rounded-lg border border-gray-200 bg-neutral-800 text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none bg-neutral-800 focus:outline-none focus:bg-gray-100 border-neutral-700 text-neutral-300 hover:bg-neutral-700 focus:bg-neutral-700"
                                        href="dashboard" wire:navigate>
                                        Dashboard
                                    </a>
                                @else
                                    <div
                                        class="hs-dropdown [--placement:bottom-right] relative inline-flex z-[999] ms-2">
                                        <button id="hs-dropdown-with-icons" type="button"
                                            class="hs-dropdown-toggle inline-flex items-center gap-x-2 text-xs text-white"
                                            aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                            <img src="{{ $image ?? 'https://w7.pngwing.com/pngs/798/436/png-transparent-computer-icons-user-profile-avatar-profile-heroes-black-profile-thumbnail.png' }}"
                                                class="max-h-6 max-w-6 object-cover object-fit-cover rounded-full"
                                                alt="profile">
                                            {{ $name ?? 'name' }}
                                            <svg class="hs-dropdown-open:rotate-180 size-4"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="m6 9 6 6 6-6" />
                                            </svg>
                                        </button>

                                        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg mt-2 dark:bg-neutral-800 dark:border dark:border-neutral-700"
                                            role="menu" aria-orientation="vertical" aria-labelledby="hs-dropright">
                                            <div class="p-1 space-y-0.5">
                                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
                                                    href="#">
                                                    Newsletter
                                                </a>
                                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
                                                    href="#">
                                                    Purchases
                                                </a>
                                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
                                                    href="#">
                                                    Downloads
                                                </a>
                                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300"
                                                    href="#" wire:click="logout">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="shrink-0 size-4">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path
                                                            d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                                                        <path d="M9 12h12l-3 -3" />
                                                        <path d="M18 15l3 -3" />
                                                    </svg>
                                                    Logout
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @else
                                <a class="py-[7px] px-3 inline-flex items-center font-medium text-[12px] rounded-lg border border-gray-200 bg-neutral-800 text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none bg-neutral-800 focus:outline-none focus:bg-gray-100 border-neutral-700 text-neutral-300 hover:bg-neutral-700 focus:bg-neutral-700"
                                    href="login" wire:navigate>
                                    Log in
                                </a>
                                <a class="py-[7px] px-2.5 inline-flex items-center font-medium text-[12px] rounded-lg bg-white text-dark hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none hover:bg-gray-200 focus:bg-gray-200 border-none"
                                    href="register" wire:navigate>
                                    Register
                                </a>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <nav class="relative max-w-[85rem] w-full mx-auto py-4 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-12 justify-between items-center gap-x-1 w-full">
                <div class="lg:col-span-3">
                    <a class="flex font-semibold gap-x-3 text-xl text-black focus:outline-none focus:opacity-80 text-white justify-start "
                        href="#" aria-label="Brand">
                        <x-logo-app classes="size-7 shrink-0" />
                        <span class="md:block hidden">
                            Novaxioo
                        </span>
                    </a>
                </div>
                <div class="flex justify-end gap-x-4 lg:col-span-3 md:order-3">
                    <div class="relative hidden md:block">
                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-3.5">
                            <svg class="shrink-0 size-4 text-gray-400 " xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8" />
                                <path d="m21 21-4.3-4.3" />
                            </svg>
                        </div>
                        <input type="text"
                            class="py-2 ps-10 block w-full bg-white border-gray-200 text-sm rounded-lg focus:outline-none focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none border-neutral-700 focus:ring-neutral-600 placeholder:text-gray-400"
                            placeholder="Search">
                    </div>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="text-white shrink-0 size-6">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                            <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                        </svg>
                    </button>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="shrink-0 size-6 text-white">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M17 17h-11v-14h-2" />
                            <path d="M6 5l14 1l-1 7h-13" />
                        </svg>
                    </button>
                    <div class="md:hidden">
                        <button type="button"
                            class="hs-collapse-toggle size-[38px] flex justify-center items-center text-sm font-semibold rounded-xl border border-gray-200  focus:outline-none disabled:opacity-50 disabled:pointer-events-none text-white border-neutral-700 hover:bg-neutral-700 focus:bg-neutral-700"
                            id="hs-navbar-hcail-collapse" aria-expanded="false" aria-controls="hs-navbar-hcail"
                            aria-label="Toggle navigation" data-hs-collapse="#hs-navbar-hcail">
                            <svg class="hs-collapse-open:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <line x1="3" x2="21" y1="6" y2="6" />
                                <line x1="3" x2="21" y1="12" y2="12" />
                                <line x1="3" x2="21" y1="18" y2="18" />
                            </svg>
                            <svg class="hs-collapse-open:block hidden shrink-0 size-4"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M18 6 6 18" />
                                <path d="m6 6 12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="col-span-2 lg:col-span-6 text-white">
                    <div id="hs-navbar-hcail"
                        class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block md:w-auto md:basis-auto md:order-2 md:col-span-6"
                        aria-labelledby="hs-navbar-hcail-collapse">
                        <div
                            class="flex flex-col gap-y-4 gap-x-0 mt-5 md:flex-row md:justify-center md:items-center md:gap-y-0 lg:gap-x-12 md:gap-x-7 md:mt-0">
                            <div>
                                <a class="inline-block focus:outline-none text-white hover:text-neutral-300 focus:text-neutral-300"
                                    href="#" aria-current="page">Saga</a>
                            </div>
                            <div>
                                <a class="inline-block focus:outline-none text-white hover:text-neutral-300 focus:text-neutral-300"
                                    href="#">Hype</a>
                            </div>
                            <div>
                                <a class="inline-block focus:outline-none text-white hover:text-neutral-300 focus:text-neutral-300"
                                    href="#">Pongo</a>
                            </div>
                            <div>
                                <a class="inline-block focus:outline-none text-white hover:text-neutral-300 focus:text-neutral-300"
                                    href="#">Accessories</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</div>
