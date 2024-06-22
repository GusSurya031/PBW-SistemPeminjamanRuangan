@extends('layouts.main')

@section('container')
    <section class="px-4 mt-[128px] md:mt-[120px]">
        {{-- Header --}}
        <div class="relative xl:max-w-7xl mx-auto flex flex-col items-center gap-4 text-center pb-12 border-b-2">
            {{-- Button to back page --}}
            <button class="absolute left-0 p-3 md:p-4 border-2 text-stone-400 border-stone-400 rounded-full"
                onclick="window.history.back();">
                <i class="fas fa-chevron-left"></i>
            </button>
            {{-- title --}}
            <h3 class="text-center md:text-left text-sm text-stone-400 md:text-xl mt-8">Isi data dibawah untuk meminjam
                gedung.</h3>
            <h1 class="text-center text-4xl md:text-6xl uppercase font-light">Form Peminjaman Ruangan</h1>
        </div>
        {{-- Content --}}
        <main class="container xl:max-w-5xl mx-auto flex-grow p-3 md:p-6">

            <div class="w-full pr-0 lg:pr-2">
                <div class="leading-loose">
                    {{-- Form Section --}}
                    <form class="p-10 bg-white rounded shadow-xl grid grid-cols-1 md:grid-cols-2 gap-4 "
                        action="/create-schedule" method="POST">
                        @csrf
                        {{-- Input ruangan yang dipinjam --}}
                        <div class="">
                            <h3 class="font-bold text-2xl">Ruangan Yang Dipinjam</h3>
                            {{-- Input Gedung --}}
                            <div class="mt-4">
                                <label for="building" class="block text-sm font-medium leading-6 text-gray-900">Pilihan
                                    Gedung</label>
                                <div class="mt-2">
                                    <select id="building" name="building" required
                                        class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-stone-900 sm:text-sm sm:leading-6">
                                        <option hidden></option>
                                        @foreach ($buildings as $building)
                                            <option value="{{ $building->id }}">{{ $building->building_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            {{-- Input room --}}
                            <div class="mt-4">
                                <label for="room_id" class="block text-sm font-medium leading-6 text-gray-900">Pilihan
                                    Ruangan</label>
                                <div class="mt-2">
                                    <select id="room_id" name="room_id" required
                                        class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-stone-900 sm:text-sm sm:leading-6">
                                        <option hidden></option>
                                        uangan @foreach ($rooms as $room)
                                            <option value="{{ $room->id }}" data-building="{{ $room->building_id }}">
                                                {{ $room->room_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            {{-- Input Purpose --}}
                            <div class="mt-4">
                                <label for="purpose"
                                    class="block text-sm font-medium leading-6 text-gray-900">Tujuan</label>
                                <div class="mt-2">
                                    <textarea name="purpose" id="purpose" rows="3" placeholder="Kepanitiaan, Perkulihan, ..."
                                        class="w-full ring-1 ring-gray-300 rounded-md p-2" style="resize: none"></textarea>
                                </div>
                            </div>
                        </div>
                        {{-- Input Waktu yang dipinjam --}}
                        <div class="flex flex-col justify-between">
                            <h3 class="font-bold text-2xl">Waktu Peminjaman</h3>
                            {{-- Input Date --}}
                            <div class="flex flex-col gap-4">
                                <div>
                                    <label for="loan_date" class="block text-sm font-medium leading-6 text-gray-900">Tanggal
                                        Mulai</label>
                                    <div class="">
                                        <input id="loan_date" name="loan_date" type="date" autocomplete="loan_date"
                                            required
                                            class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-stone-900 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                                <div>
                                    <label for="end_loan_date"
                                        class="block text-sm font-medium leading-6 text-gray-900">Tanggal
                                        Selesai</label>
                                    <div class="">
                                        <input id="end_loan_date" name="end_loan_date" type="date"
                                            autocomplete="end_loan_date" required
                                            class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-stone-900 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                            </div>
                            {{-- Input Time --}}
                            <div class="mb-2.5">
                                <label for="start_time" class="block text-sm font-medium leading-6 text-gray-900">Jam
                                    Mulai</label>
                                <div class="mt-2">
                                    <input id="start_time" name="start_time" type="time" autocomplete="start_time"
                                        required
                                        class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-stone-900 sm:text-sm sm:leading-6">
                                </div>
                                <div>
                                    <label for="end_time" class="block text-sm font-medium leading-6 text-gray-900">Jam
                                        Selesai</label>
                                    <div class="mt-2">
                                        <input id="end_time" name="end_time" type="time" autocomplete="end_time"
                                            required
                                            class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-stone-900 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit"
                            class="col-span-1 md:col-span-2 mt-4 rounded-md border border-2 border-stone-900 transition-all bg-stone-900 py-3 px-4 text-sm font-semibold text-white shadow-sm hover:bg-white hover:text-stone-900">Kirim
                            Permintaan Peminjaman
                        </button>
                    </form>
                </div>
            </div>
        </main>
        </div>

        {{-- Script untuk set room based on building --}}
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const buildingSelect = document.getElementById('building');
                const roomSelect = document.getElementById('room_id');

                buildingSelect.addEventListener('change', function() {
                    const selectedBuildingId = this.value;
                    const roomOptions = roomSelect.querySelectorAll('option');
                    // console.log(roomSelect);
                    roomSelect.value = '';
                    roomOptions.forEach(option => {
                        if (option.value && option.getAttribute('data-building') !==
                            selectedBuildingId) {
                            option.style.display = 'none';
                        } else {
                            option.style.display = '';
                        }
                    });
                });
            });
        </script>
    @endsection
