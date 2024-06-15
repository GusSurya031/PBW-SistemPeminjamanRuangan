@extends('layouts.main')

@section('container')
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-4">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <a class="flex justify-center items-center gap-2" href="/">
                <img class="" src="/img/logo.png" alt="Your Company">
                <figcaption class="text-2xl capitalize text-gray-900">RuanganKu
                </figcaption>
            </a>
            <h2 class="mt-6 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account
            </h2>
            <p class="text-center">Buat akun agar bisa meminjam ruangan FMIPA Udayana</p>
        </div>

        <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-2xl">
            <form class="space-y-3" action="/store" method="POST">
                @csrf
                {{-- NIM --}}
                <div>
                    <label for="nim" class="block text-sm font-medium leading-6 text-gray-900">NIM</label>
                    <div class="mt-2">
                        <input id="nim" name="nim" type="text" autocomplete="nim" required
                            class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-stone-600 sm:text-sm sm:leading-6 @error('nim') is-invalid @enderror"
                            value="{{ old('nim') }}" placeholder="2108561001">
                        @error('nim')
                            <div class="italic text-red-400 font-semibold text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- Email --}}
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email Address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required
                            class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-stone-600 sm:text-sm sm:leading- @error('email') is-invalid @enderror"
                            value="{{ old('email') }}" placeholder="user@gmail.com">
                        @error('email')
                            <div class="italic text-red-400 font-semibold text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- Name --}}
                <div>
                    <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nama Lengkap</label>
                    <div class="mt-2">
                        <input id="name" name="name" type="text" autocomplete="name" required
                            class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-stone-600 sm:text-sm sm:leading-6 @error('name')is-invalid @enderror"
                            value="{{ old('name') }}" placeholder="John Smith">
                        @error('name')
                            <div class="italic text-red-400 font-semibold text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    {{-- Phone Number --}}
                    <div>
                        <label for="phone_number" class="block text-sm font-medium leading-6 text-gray-900">No
                            Telepon</label>
                        <div class="mt-2">
                            <input id="phone_number" name="phone_number" type="text" autocomplete="phone_number" required
                                class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-stone-600 sm:text-sm sm:leading-6 @error('phone_number')is-invalid @enderror"
                                value="{{ old('phone_number') }}" placeholder="08123456789">
                        </div>
                        @error('phone_number')
                            <div class="italic text-red-400 font-semibold text-sm">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Gender --}}
                    <div>
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Gender</label>
                        <div class="mt-2 grid grid-cols-2 items-center py-2 gap-4">
                            <div class="flex gap-2">
                                <input id="laki-laki" name="gender" type="radio" autocomplete="email" required
                                    value="laki-laki"
                                    class="block rounded-md border-0 p-2 text-gray-900 shadow-sm focus:ring-stone-600 sm:text-sm sm:leading-6">
                                <label for="laki-laki">Laki-Laki</label>
                            </div>
                            <div class="flex gap-2">
                                <input id="perempuan" name="gender" type="radio" autocomplete="email" required
                                    value="perempuan"
                                    class="block rounded-md border-0 p-2 text-gray-900 shadow-sm focus:ring-stone-600 sm:text-sm sm:leading-6">
                                <label for="perempuan">Perempuan</label>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Password --}}
                <div>
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-stone-600 sm:text-sm sm:leading-6 @error('password') is-invalid @enderror"
                            placeholder="******">
                    </div>
                    @error('password')
                        <div class="italic text-red-400 font-semibold text-sm">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Konfirmasi Password --}}
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium leading-6 text-gray-900">Konfirmasi
                        Password</label>
                    <div class="mt-2">
                        <input id="password_confirmation" name="password_confirmation" type="password"
                            autocomplete="password_confirmation" required
                            class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-stone-600 sm:text-sm sm:leading-6 @error('password_confirmation') is-invalid @enderror"
                            placeholder="******">
                    </div>
                    @error('password_confirmation')
                        <div class="italic text-red-400 font-semibold text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-stone-900 p-2 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-stone-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
                        in</button>
                </div>
            </form>

            <p class="mt-6 text-center text-sm text-gray-500">
                Already have account?
                <a href="/login" class="font-semibold leading-6 text-stone-900 hover:text-stone-500">Login Here</a>
            </p>
        </div>
    </div>
@endsection
