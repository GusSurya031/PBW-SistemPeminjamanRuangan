@extends('dashboards.layouts.main')

@section('container')
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        @session('success')
            <div class="p-4 bg-green-100">
                {{ $value }}
            </div>
        @endsession

        @if (session()->has('errorLogin'))
            <div class="p-4 bg-red-100">
                {{ session('errorLogin') }}
            </div>
        @endif
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <a class="flex justify-center items-center gap-2" href="/">
                <img class="" src="/img/logo.png" alt="Your Company">
                <figcaption class="text-2xl capitalize text-gray-900">RuanganKu
                </figcaption>
            </a>
            <h2 class="mt-6 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Log in Admin account
            </h2>
            <p class="text-center">Masukan data untuk login ke dashboard peminjaman ruangan</p>
        </div>

        <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="/admin/login" method="POST">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required
                            class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-stone-900 sm:text-sm sm:leading-6 @error('email') is-invalid @enderror"
                            value="{{ old('email') }}" placeholder="email@studend.unud.ac.id">
                        @error('email')
                            <div class="italic text-red-400 font-semibold text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                        <div class="text-sm">
                            <a href="#" class="font-semibold text-stone-900 hover:text-stone-500">Forgot
                                password?</a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-stone-900 sm:text-sm sm:leading-6"
                            placeholder="******">
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-stone-900 px-3 p-2 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-stone-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-stone-900">Sign
                        in</button>
                </div>
            </form>
        </div>
    </div>
@endsection
