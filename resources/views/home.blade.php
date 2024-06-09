<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Sistem Peminjaman Ruangan</title>
</head>

<body>
    @include('layouts.header')
    <main id="content">
        <!-- hero start -->
        <div id="hero" class="section relative z-0 py-16 md:pt-32 md:pb-20 bg-gray-50">
            <div class="container xl:max-w-6xl mx-auto px-4">
                <div class="flex flex-wrap flex-row -mx-4 justify-center">
                    <!-- content -->
                    <div class="flex-shrink max-w-full px-4 sm:px-12 lg:px-18 w-full sm:w-9/12 lg:w-1/2 self-center">
                        <img src="/img/hero.svg" class="w-full max-w-full h-auto" alt="creative agency">
                    </div><!-- end content -->

                    <!-- text -->
                    <div class="flex-shrink max-w-full px-4 w-full md:w-9/12 lg:w-1/2 self-center lg:pr-12">
                        <div class="text-center lg:text-left mt-6 lg:mt-0">
                            <div class="mb-12">
                                <h1 class="text-4xl leading-normal text-black font-bold mb-4">We are a Digital
                                    Agency<br>serve <span data-toggle="typed"
                                        data-options='{"strings": ["Online Marketing", "Web Design", "Mobile Apps", "Brand Identity", "Social Content"]}'></span>
                                </h1>
                                <p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2">We would direct
                                    you to limitless ideas and move your brand into a global landscape.</p>
                            </div>
                            <a class="py-2.5 px-10 inline-block text-center leading-normal text-gray-900 bg-white border-b border-gray-100 hover:text-black hover:ring-0 focus:outline-none focus:ring-0 mr-4"
                                href="#portfolio">
                                <svg xmlns="http://www.w3.org/2000/svg" class="inline-block mr-1" width="1.5rem"
                                    height="1.5rem" fill="currentColor" viewBox="0 0 512 512">
                                    <path
                                        d="M304,384V360c0-29,31.54-56.43,52-76,28.84-27.57,44-64.61,44-108,0-80-63.73-144-144-144A143.6,143.6,0,0,0,112,176c0,41.84,15.81,81.39,44,108,20.35,19.21,52,46.7,52,76v24"
                                        style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                    <line x1="224" y1="480" x2="288" y2="480"
                                        style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                    <line x1="208" y1="432" x2="304" y2="432"
                                        style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                    <line x1="256" y1="384" x2="256" y2="256"
                                        style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                    <path d="M294,240s-21.51,16-38,16-38-16-38-16"
                                        style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                </svg>
                                Our Work
                            </a>

                            <a class="py-2.5 px-10 inline-block text-center leading-normal text-gray-100 bg-black border-b border-gray-800 hover:text-white hover:ring-0 focus:outline-none focus:ring-0"
                                target="_blank" href="https://aribudin.gumroad.com/l/tailone">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem"
                                    class="inline-block mr-1" fill="currentColor" viewBox="0 0 512 512">
                                    <rect x="48" y="96" width="416" height="320" rx="40" ry="40"
                                        style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                    <polyline points="112 160 256 272 400 160"
                                        style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                </svg>
                                Download Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end Hero -->

        <!-- start services -->
        <div id="services" class="section relative pt-20 pb-8 md:pt-16 md:pb-0 bg-white">
            <div class="container xl:max-w-6xl mx-auto px-4">
                <!-- Heading start -->
                <header class="text-center mx-auto mb-12 lg:px-20">
                    <h2 class="text-2xl leading-normal mb-2 font-bold text-black">What We Do</h2>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="0 0 100 60" style="margin: 0 auto;height: 35px;" xml:space="preserve">
                        <circle cx="50.1" cy="30.4" r="5" class="stroke-primary"
                            style="fill: transparent;stroke-width: 2;stroke-miterlimit: 10;"></circle>
                        <line x1="55.1" y1="30.4" x2="100" y2="30.4" class="stroke-primary"
                            style="stroke-width: 2;stroke-miterlimit: 10;"></line>
                        <line x1="45.1" y1="30.4" x2="0" y2="30.4" class="stroke-primary"
                            style="stroke-width: 2;stroke-miterlimit: 10;"></line>
                    </svg>
                    <p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2">Save time managing
                        advertising & Content for your business.</p>
                </header><!-- End heading -->

                <!-- row -->
                <div class="flex flex-wrap flex-row -mx-4 text-center">
                    <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp"
                        data-wow-duration="1s">
                        <!-- service block -->
                        <div
                            class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
                            <div class="inline-block text-gray-900 mb-4">
                                <!-- icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem"
                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </div>
                            <h3 class="text-lg leading-normal mb-2 font-semibold text-black">SEO Services</h3>
                            <p class="text-gray-500">This is a wider card with supporting text below as a natural
                                content.</p>
                        </div> <!-- end service block -->
                    </div>

                    <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp"
                        data-wow-duration="1s" data-wow-delay=".1s">
                        <!-- service block -->
                        <div
                            class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
                            <div class="inline-block text-gray-900 mb-4">
                                <!-- icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem"
                                    fill="currentColor" class="bi bi-chat-square-dots" viewBox="0 0 16 16">
                                    <path
                                        d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                    <path
                                        d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                </svg>

                            </div>
                            <h3 class="text-lg leading-normal mb-2 font-semibold text-black">Social Content</h3>
                            <p class="text-gray-500">This is a wider card with supporting text below as a natural
                                content.</p>
                        </div><!-- end service block -->
                    </div>

                    <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp"
                        data-wow-duration="1s" data-wow-delay=".3s">
                        <!-- service block -->
                        <div
                            class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
                            <div class="inline-block text-gray-900 mb-4">
                                <!-- icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem"
                                    fill="currentColor" class="bi bi-badge-ad" viewBox="0 0 16 16">
                                    <path
                                        d="M3.7 11l.47-1.542h2.004L6.644 11h1.261L5.901 5.001H4.513L2.5 11h1.2zm1.503-4.852l.734 2.426H4.416l.734-2.426h.053zm4.759.128c-1.059 0-1.753.765-1.753 2.043v.695c0 1.279.685 2.043 1.74 2.043.677 0 1.222-.33 1.367-.804h.057V11h1.138V4.685h-1.16v2.36h-.053c-.18-.475-.68-.77-1.336-.77zm.387.923c.58 0 1.002.44 1.002 1.138v.602c0 .76-.396 1.2-.984 1.2-.598 0-.972-.449-.972-1.248v-.453c0-.795.37-1.24.954-1.24z" />
                                    <path
                                        d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z" />
                                </svg>
                            </div>
                            <h3 class="text-lg leading-normal mb-2 font-semibold text-black">Creative ads</h3>
                            <p class="text-gray-500">This is a wider card with supporting text below as a natural
                                content.</p>
                        </div><!-- end service block -->
                    </div>

                    <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp"
                        data-wow-duration="1s">
                        <!-- service block -->
                        <div
                            class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
                            <div class="inline-block text-gray-900 mb-4">
                                <!-- icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem"
                                    fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
                                    <path
                                        d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                    <path
                                        d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                                </svg>
                            </div>
                            <h3 class="text-lg leading-normal mb-2 font-semibold text-black">Brand Identity</h3>
                            <p class="text-gray-500">This is a wider card with supporting text below as a natural
                                content.</p>
                        </div><!-- end service block -->
                    </div>

                    <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp"
                        data-wow-duration="1s" data-wow-delay=".1s">
                        <!-- service block -->
                        <div
                            class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
                            <div class="inline-block text-gray-900 mb-4">
                                <!-- icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem"
                                    fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
                                    <path
                                        d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z" />
                                </svg>
                            </div>
                            <h3 class="text-lg leading-normal mb-2 font-semibold text-black">Budget & Marketing</h3>
                            <p class="text-gray-500">This is a wider card with supporting text below as a natural
                                content.</p>
                        </div><!-- end service block -->
                    </div>

                    <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp"
                        data-wow-duration="1s" data-wow-delay=".3s">
                        <!-- service block -->
                        <div
                            class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
                            <div class="inline-block text-gray-900 mb-4">
                                <!-- icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem"
                                    fill="currentColor" class="bi bi-funnel" viewBox="0 0 16 16">
                                    <path
                                        d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2h-11z" />
                                </svg>
                            </div>
                            <h3 class="text-lg leading-normal mb-2 font-semibold text-black">Optimize conversions</h3>
                            <p class="text-gray-500">This is a wider card with supporting text below as a natural
                                content.</p>
                        </div><!-- end service block -->
                    </div>
                </div><!-- end row -->
            </div>
        </div><!-- End Service -->


    </main><!-- end main -->
</body>

</html>
