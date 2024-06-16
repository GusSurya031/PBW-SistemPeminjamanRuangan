@extends('layouts.main')

@section('container')
    <div class="container xl:max-w-5xl mx-auto px-4 mt-[164px] md:mt-[120px]">
        <main class=" flex-grow p-6">
            <div>
                <h1 class="text-center text-6xl uppercase font-light">Form Peminjaman Ruangan</h1>
            </div>
            <div class="w-full pr-0 lg:pr-2">
                <div class="leading-loose">
                    <form class="p-10 bg-white rounded shadow-xl" action="/create-schedule" method="POST">
                        @csrf
                        {{-- Input Nama --}}
                        <div>
                            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nama
                                Lengkap</label>
                            <div class="mt-2">
                                <input id="name" name="name" type="text" autocomplete="name" required
                                    class="block w-full rounded-md border-0 p-2 text-gray-400 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6"
                                    value="{{ auth()->user()->name }}" disabled>
                            </div>
                        </div>
                        {{-- Input NIM --}}
                        <div class="mt-4">
                            <label for="user_nim" class="block text-sm font-medium leading-6 text-gray-900">NIM</label>
                            <div class="mt-2">
                                <input id="user_nim" name="user_nim" type="text" autocomplete="user_nim" required
                                    class="block w-full rounded-md border-0 p-2 text-gray-300 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                    value="{{ auth()->user()->nim }}" disabled>
                            </div>
                        </div>

                        {{-- Input Gedung --}}
                        <div class="mt-4">
                            <label for="building" class="block text-sm font-medium leading-6 text-gray-900">Pilihan
                                Gedung</label>
                            <div class="mt-2">
                                <select id="building" name="building" required
                                    class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
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
                                    class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <option hidden></option>
                                    @foreach ($rooms as $room)
                                        <option value="{{ $room->id }}" data-building="{{ $room->building_id }}">
                                            {{ $room->room_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        {{-- Input Date --}}
                        <div class="mt-4 grid grid-cols-2 gap-4">
                            <div>
                                <label for="loan_date" class="block text-sm font-medium leading-6 text-gray-900">Tanggal
                                    Mulai</label>
                                <div class="mt-2">
                                    <input id="loan_date" name="loan_date" type="date" autocomplete="loan_date" required
                                        class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div>
                                <label for="end_loan_date" class="block text-sm font-medium leading-6 text-gray-900">Tanggal
                                    Selesai</label>
                                <div class="mt-2">
                                    <input id="end_loan_date" name="end_loan_date" type="date"
                                        autocomplete="end_loan_date" required
                                        class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>

                        {{-- Input Time --}}
                        <div class="mt-4 grid grid-cols-2 gap-4">
                            <div>
                                <label for="start_time" class="block text-sm font-medium leading-6 text-gray-900">Jam
                                    Mulai</label>
                                <div class="mt-2">
                                    <input id="start_time" name="start_time" type="time" autocomplete="start_time"
                                        required
                                        class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div>
                                <label for="end_time" class="block text-sm font-medium leading-6 text-gray-900">Jam
                                    Selesai</label>
                                <div class="mt-2">
                                    <input id="end_time" name="end_time" type="time" autocomplete="end_time" required
                                        class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>

                        {{-- Input Purpose --}}
                        <div class="mt-4">
                            <label for="purpose" class="block text-sm font-medium leading-6 text-gray-900">Tujuan</label>
                            <div class="mt-2">
                                <select id="purpose" name="purpose" required
                                    class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <option hidden></option>
                                    <option value="perkuliahan">Perkuliahan</option>
                                    <option value="panitia">Kepanitiaan</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit"
                            class=" mt-4 justify-end rounded-md bg-indigo-600 p-2 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
                    </form>
                </div>
            </div>

        </main>
    </div>

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
