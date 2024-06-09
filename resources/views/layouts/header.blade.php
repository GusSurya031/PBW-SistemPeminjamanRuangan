<header class="fixed top-0 left-0 right-0 z-50 bg-red-200">
    <nav class="container xl:max-w-7xl mx-auto px-4">
        <div class="lg:flex lg:justify-between">
            <div class="flex justify-between">
                <div class="mx-w-10 text-4xl font-bold capitalize text-gray-900 flex items-center">Tailone</div>
                <!-- mobile nav -->
                <div class="flex flex-row items-center py-4 lg:py-0">
                    <div class="relative text-gray-900 hover:text-black block lg:hidden">
                        <button type="button" class="menu-mobile block py-3 px-6 border-b-2 border-transparent"
                            id="menuButton">
                            <span class="sr-only">Mobile menu</span>
                            <svg class="open h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
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
                    <ul class="hidden absolute bg-red-200 lg:bg-transparent w-full text-right lg:text-left text-gray-900 text-sm items-center font-bold top-20 right-0 pr-4"
                        id="listNavigation">
                        <li class="relative hover:text-black">
                            <a class="active block py-3 lg:py-7 px-6 border-b-2 border-transparent"
                                href="">Home</a>
                        </li>
                        <li class="relative hover:text-black">
                            <a class="block py-3 lg:py-7 px-6 border-b-2 border-transparent" href="">What
                                we do</a>
                        </li>
                        <li class="relative hover:text-black">
                            <a class="block py-3 lg:py-7 px-6 border-b-2 border-transparent" href="">Our
                                works</a>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="flex flex-row">
                <!-- nav menu -->
                <ul
                    class="navbar bg-white lg:bg-transparent w-full hidden text-center lg:text-left lg:flex lg:flex-row text-gray-900 text-sm items-center font-bold">
                    <li class="relative hover:text-black">
                        <a class="active block py-3 lg:py-7 px-6 border-b-2 border-transparent" href="">Home</a>
                    </li>
                    <li class="relative hover:text-black">
                        <a class="block py-3 lg:py-7 px-6 border-b-2 border-transparent" href="">What
                            we do</a>
                    </li>
                    <li class="relative hover:text-black">
                        <a class="block py-3 lg:py-7 px-6 border-b-2 border-transparent" href="">Our
                            works</a>
                    </li>
                </ul>
            </div>
            <div class=" ">
                <!-- nav login register -->
                <ul
                    class="navbar bg-white lg:bg-transparent w-full hidden text-center lg:text-left lg:flex lg:flex-row text-gray-900 text-sm items-center font-bold">
                    <li class="relative hover:text-black">
                        <a class="active block py-3 lg:py-7 px-6 border-b-2 border-transparent" href="/login">Login</a>
                    </li>
                    <li class="relative hover:text-black">
                        <a class="block py-3 lg:py-7 px-6 border-b-2 border-transparent" href="/register">
                            Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header><!-- end header -->

<script src="/js/script.js"></script>
