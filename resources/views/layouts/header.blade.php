<header class="fixed top-0 left-0 right-0 z-50 bg-white">
    <nav class="container xl:max-w-7xl mx-auto p-4 border-b-2 flex justify-between">
        {{-- Dekstop --}}
        <div class="w-full lg:w-auto flex justify-between relative">
            {{-- Logo Container --}}
            <div class="flex justify-center items-center gap-2">
                <img src="/img/logo.png" alt="Logo-ruanganku" class="w-[42px] h-[42px]">
                <figcaption class="text-2xl font-bold capitalize text-gray-900 flex items-center">RuanganKu
                </figcaption>
            </div>
            {{-- Mobile Nav --}}
            <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end lg:hidden">
                <button @click=" isOpen = !isOpen"
                    class="relative menu-mobile block py-3 px-6 border-b-2 border-transparent">
                    <div>
                        <svg class="open h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </div>
                </button>
                <button x-show="isOpen" @click="isOpen = false"
                    class="h-full w-full fixed inset-0 cursor-default"></button>
                <div x-show="isOpen" class="absolute w-full bg-white rounded-lg shadow-lg py-2 mt-16">
                    <a href="/" class="block px-4 py-2 account-link hover:bg-stone-200"><i
                            class="fas fa-home mr-2"></i>
                        Landing Page</a>
                    <a href="/building" class="block px-4 py-2 account-link hover:bg-stone-200"><i
                            class="fas fa-building mr-2"></i>
                        List Gedung</a>
                    <a href="/forms" class="block px-4 py-2 account-link hover:bg-stone-200"><i
                            class="fas fa-comment-dots mr-2"></i>
                        Peminjaman Ruangan</a>
                    @auth
                        <a href="/history" class="block px-4 py-2 account-link hover:bg-stone-200"><i
                                class="fas fa-history mr-2"></i>
                            Riwayat Peminjaman</a>
                    @endauth
                    @auth
                        <div
                            class="navbar bg-white lg:bg-transparent w-full text-center lg:text-left lg:flex lg:flex-row gap-4 text-gray-900 items-center font-bold text-base">
                            <form action="/logout" method="POST">
                                @csrf
                                <button class="w-full px-4 py-2 account-link text-right hover:bg-stone-200 border-t-2"><i
                                        class="fas fa-arrow-left mr-2"></i>Logout </button>
                            </form>
                        </div>
                    @else
                        <div class="flex justify-center gap-4 border-t-2 pt-2">
                            <a class="border border-stone-900 rounded-md active p-3" href="/login">Login</a>
                            <a class="border border-stone-900 rounded-md text-white bg-stone-900 p-3"
                                href="/register">Register</a>
                        </div>
                    @endauth

                </div>
            </div>
        </div>

        {{-- Desktop Nav --}}
        <div class="flex flex-row">
            <!-- nav menu -->
            <ul
                class="navbar bg-white lg:bg-transparent w-full hidden text-center lg:text-left lg:flex lg:flex-row gap-20 text-gray-900 items-center text-md">
                <li class="relative ">
                    <a class="hover:font-bold" href="/">Landing
                        Page</a>
                </li>
                <li class="relative ">
                    <a class="hover:font-bold" href="/building">List
                        Gedung</a>
                </li>
                <li class="relative ">
                    <a class="hover:font-bold" href="/forms">Peminjaman
                        Ruangan</a>
                </li>
                @auth
                    <li>
                        <a href="/history" class="hover:font-bold">
                            Riwayat Peminjaman</a>
                    </li>
                @endauth
            </ul>
        </div>
        <div class="">
            <!-- nav login register -->
            @auth
                <div
                    class="navbar bg-white lg:bg-transparent w-full hidden text-center lg:text-left lg:flex lg:flex-row gap-4 text-gray-900 items-center font-bold text-base">
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="relative block py-2 px-3 rounded-md text-white bg-stone-900">
                            Logout
                        </button>
                    </form>
                </div>
            @else
                <ul
                    class="navbar bg-white lg:bg-transparent w-full hidden text-center lg:text-left lg:flex lg:flex-row gap-4 text-gray-900 items-center font-bold text-base">
                    <li
                        class="relative border border-stone-900 rounded-md transition-all hover:bg-stone-900 hover:text-white">
                        <a class="active block py-3 px-6" href="/login">Login</a>
                    </li>
                    <li class="relative border border-stone-900 rounded-md text-white bg-stone-900">
                        <a class="block py-3 px-6" href="/register">
                            Register</a>
                    </li>
                </ul>
            @endauth

        </div>
    </nav>
</header>
