<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Sistem Peminjaman Ruangan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    @include('layouts.header')
    <main>
        {{-- Hero Section --}}
        <div class="container xl:max-w-7xl mx-auto px-4 flex flex-col gap-8">
            <div class="text-center md:text-left grid md:grid-cols-2 gap-6 mt-[164px] md:mt-[120px] py-4 text-lg">
                <div class="flex relative">
                    <img src="/img/ellipse-line.png" alt="" class="absolute -z-10 -top-10 right-0">
                    <h1 class="text-6xl uppercase">Sistem Peminjaman Ruangan FMIPA</h1>
                </div>
                <div
                    class="text-center md:text-left md:place-self-center flex flex-col md:items-start items-center leading-9 ">
                    <p>
                        Peminjaman gedung berbasis sistem di Fakultas MIPA Udayana. Dibuat oleh mahasiswa program studi
                        informatika.
                    </p>
                    <button class="mt-6 border-stone-900 rounded-md text-white bg-stone-900 px-4 py-2 font-bold">
                        <a href="/forms">Pinjam Ruangan FMIPA</a>
                    </button>
                </div>
            </div>
            <div>
                <img src="/img/hero.png" alt="GedungFMIPA">
            </div>
        </div>
        {{-- End Hero Section --}}

        {{-- Start Buildings --}}
        <div
            class="text-center container xl:max-w-7xl mx-auto px-4 md:text-left grid md:grid-cols-3 lg:grid-cols-12 mt-20 lg:mt-[120px] py-4 text-lg gap-6 leading-9">
            <div class="md:col-span-1 lg:col-span-3 flex flex-col">
                <h1 class="text-6xl uppercase">Fakultas MIPA</h1>
                <p>Jalan raya kampus unud No. 203 A </p>
            </div>
            <div class="md:col-span-2 lg:col-span-9 grid grid-cols-2 lg:grid-cols-3 gap-6">
                <div
                    class="text-center md:text-left md:place-self-center flex flex-col gap-2 transform transition duration-300 ease-in-out hover:-translate-y-2">
                    <figure class="w-full">
                        <img src="/img/class.png" alt="classroom">
                    </figure>
                    <figcaption>
                        <h3 class="font-bold text-2xl">30 Ruangan belajar</h3>
                        <p class="text-base">Gedung FMIPA</p>
                    </figcaption>
                </div>
                <div
                    class="text-center md:text-left md:place-self-center flex flex-col gap-2 transform transition duration-300 ease-in-out hover:-translate-y-2">
                    <figure class="w-full">
                        <img src="/img/class.png" alt="classroom">
                    </figure>
                    <figcaption>
                        <h3 class="font-bold text-2xl">30 Ruangan belajar</h3>
                        <p class="text-base">Gedung FMIPA</p>
                    </figcaption>
                </div>
                <div
                    class="text-center md:text-left md:place-self-center flex flex-col gap-2 transform transition duration-300 ease-in-out hover:-translate-y-2">
                    <figure class="w-full">
                        <img src="/img/class.png" alt="classroom">
                    </figure>
                    <figcaption>
                        <h3 class="font-bold text-2xl">30 Ruangan belajar</h3>
                        <p class="text-base">Gedung FMIPA</p>
                    </figcaption>
                </div>
                <div
                    class="text-center md:text-left md:place-self-center flex flex-col gap-2 transform transition duration-300 ease-in-out hover:-translate-y-2">
                    <figure class="w-full">
                        <img src="/img/class.png" alt="classroom">
                    </figure>
                    <figcaption>
                        <h3 class="font-bold text-2xl">30 Ruangan belajar</h3>
                        <p class="text-base">Gedung FMIPA</p>
                    </figcaption>
                </div>
                <div
                    class="text-center md:text-left md:place-self-center flex flex-col gap-2 transform transition duration-300 ease-in-out hover:-translate-y-2">
                    <figure class="w-full">
                        <img src="/img/class.png" alt="classroom">
                    </figure>
                    <figcaption>
                        <h3 class="font-bold text-2xl">30 Ruangan belajar</h3>
                        <p class="text-base">Gedung FMIPA</p>
                    </figcaption>
                </div>
                <div
                    class="text-center md:text-left md:place-self-center flex flex-col gap-2 transform transition duration-300 ease-in-out hover:-translate-y-2">
                    <figure class="w-full">
                        <img src="/img/class.png" alt="classroom">
                    </figure>
                    <figcaption>
                        <h3 class="font-bold text-2xl">30 Ruangan belajar</h3>
                        <p class="text-base">Gedung FMIPA</p>
                    </figcaption>
                </div>
            </div>
        </div>
        {{-- End Buildings  --}}
    </main>
    @include('layouts.footer')
    <script src="/js/script.js"></script>
</body>

</html>
