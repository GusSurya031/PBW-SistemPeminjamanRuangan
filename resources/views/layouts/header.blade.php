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
            <div class="flex flex-row items-center lg:py-0 lg:hidden">
                <div class="relative text-gray-900 hover:text-black block">
                    <button type="button" class="menu-mobile block py-3 px-6 border-b-2 border-transparent"
                        id="menuButton">
                        <span class="sr-only">Mobile menu</span>
                        <svg class="open h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="close bi bi-x-lg h-8 w-8 hidden" viewBox="0 0 16 16" id="close">
                            <path fill-rule="evenodd"
                                d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z" />
                            <path fill-rule="evenodd"
                                d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z" />
                        </svg>
                    </button>
                </div>
                {{-- List Detail Nav --}}
                <ul class="hidden absolute bg-white w-full text-center lg:text-left text-gray-900 text-sm items-center font-bold top-16 right-0 py-4"
                    id="listNavigation">
                    <li class="relative hover:text-black">
                        <a class="active block py-3 px-6 border-b-2 border-transparent" href=/"">Landing
                            Page</a>
                    </li>
                    <li class="relative hover:text-black">
                        <a class="block py-3 px-6 border-b-2 border-transparent" href="/building">List
                            Gedung</a>
                    </li>
                    <li class="relative hover:text-black">
                        <a class="block py-3 px-6 border-b-2 border-transparent" href="/forms">Peminjaman
                            Ruangan</a>
                    </li>
                    @auth
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button
                                    class="relative p-3 border border-stone-900 rounded-md text-white bg-stone-900">Logout</button>
                            </form>
                        </li>
                    @else
                        <li
                            class="navbar bg-white w-full flex gap-6 items-center text-gray-900 justify-center font-bold text-base border-t-2 py-2">
                            <button class="relative border border-stone-900 rounded-md">
                                <a class="active block py-2 px-3" href="/login">Login</a>
                            </button>
                            <button class="relative border border-stone-900 rounded-md text-white bg-stone-900">
                                <a class="block py-2 px-3" href="/register">
                                    Register</a>
                            </button>
                        </li>
                    @endauth

                </ul>
            </div>
        </div>

        <div class="flex flex-row">
            <!-- nav menu -->
            <ul
                class="navbar bg-white lg:bg-transparent w-full hidden text-center lg:text-left lg:flex lg:flex-row gap-20 text-gray-900 items-center text-lg">
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
                    <li class="relative border border-stone-900 rounded-md">
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
</header><!-- end header -->
