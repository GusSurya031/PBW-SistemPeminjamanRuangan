@extends('layouts.main')

@section('container')
    <section class="container xl:max-w-7xl mx-auto px-4 mt-[128px] md:mt-[120px]">
        {{-- title --}}
        <div>
            <h1 class="text-center text-4xl md:text-6xl uppercase font-light my-16">List Seluruh Gedung di Fakultas MIPA</h1>
        </div>
        {{-- content --}}
        <div>
            @foreach ($buildings as $building)
                {{-- Each data building  --}}
                <div x-data="{ activeAccordion: false }" class="space-y-2 py-6 border-b-2 border-stone-900 overflow-auto">
                    {{-- Title Accordion --}}
                    <div @click="activeAccordion= !activeAccordion" :class="{ 'font-bold': activeAccordion }"
                        class="flex justify-between items-center">
                        {{-- Title Builidng --}}
                        <div class="text-2xl flex flex-wrap max-w-[120px] w-full ">
                            <h2>Gedung <br />
                                <span class="text-5xl font-bold italic ">{{ $building->building_name }}</span>
                            </h2>
                        </div>
                        {{-- Facilities --}}
                        <div class="hidden md:flex gap-8">
                            <p><span
                                    class="rounded-full border border-stone-900 p-3 font-bold">{{ $building->rooms->count() }}</span>
                                Ruangan</p>
                            <p><span
                                    class="rounded-full border border-stone-900 p-3 font-bold">{{ $building->floor_quantity }}</span>
                                Lantai</p>
                            <p>
                                <span
                                    class="rounded-full border border-stone-900 p-3 mr-2 font-bold">{{ $building->rooms->max('capacity') }}
                                </span> Kapasitas Terbesar
                            </p>
                        </div>
                        {{-- Button Accordion --}}
                        <div class="rounded-full border border-stone-900 p-3"
                            :class="{ 'bg-stone-900 text-white ': activeAccordion }">
                            <i class="fas fa-chevron-right @click="activeAccordion=!activeAccordion"
                                :class="{ 'rotate-90 ': activeAccordion }"></i>
                        </div>
                    </div>
                    {{-- Content Accordion --}}
                    <div x-cloak x-collapse x-show="activeAccordion" class="overflow-auto">
                        <table class="min-w-full bg-white mt-4 ">
                            {{-- Judul Tabel --}}
                            <thead class="text-xl font-bold bg-stone-900 text-white">
                                <tr class="">
                                    <th class="text-left py-3 px-4 uppercase font-semibold">No</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold">Nama Ruangan</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold">Status</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold">Info</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold"></th>
                                </tr>
                            </thead>
                            {{-- Body Table --}}
                            <tbody class="text-gray-700">
                                @php $iteration = 1; @endphp
                                {{-- Perulangan untuk per jadwal --}}
                                @foreach ($loan_schedules as $schedule)
                                    {{-- Perulangan untuk mendapatkan ruangan sesuai dengan gedungnya  --}}
                                    @foreach ($building->rooms as $room)
                                        {{-- Penggkondisian untuk menampilkan jadwal sesuai dengan room id  --}}
                                        @if ($schedule->rooms->id === $room->id)
                                            <tr class="border-b-2">
                                                <td class="text-left py-3 px-4">
                                                    {{ $iteration }}</td>
                                                <td class="text-left py-3 px-4">
                                                    {{ $schedule->rooms->room_name }}
                                                </td>
                                                <td class="text-left py-3 px-4">
                                                    @switch ($schedule->status_id)
                                                        @case(-1)
                                                            <span
                                                                class="inline-block w-[14px] h-[14px] rounded-full mr-2 bg-red-400">
                                                            </span>
                                                            Rejected
                                                        @break

                                                        @case(0)
                                                            <span
                                                                class="inline-block w-[14px] h-[14px] rounded-full mr-2 bg-stone-400"></span>
                                                            Available
                                                        @break

                                                        @case(1)
                                                            <span
                                                                class="inline-block w-[14px] h-[14px] rounded-full mr-2 bg-yellow-400"></span>
                                                            Pending
                                                        @break

                                                        @case(2)
                                                            <span
                                                                class="inline-block w-[14px] h-[14px] rounded-full mr-2 bg-green-400"></span>
                                                            Accepted
                                                        @break

                                                        @default
                                                            <span
                                                                class="inline-block w-[14px] h-[14px] rounded-full mr-2 bg-blue-400"></span>
                                                            Busy
                                                    @endswitch
                                                </td>
                                                <td class="text-left py-3 px-4">{{ $schedule->purpose }}</td>
                                                <td class="text-right py-3 px-4"> <button
                                                        class="relative border border-stone-900 rounded-md">
                                                        <a class="active block py-2 px-3 hover:bg-stone-900 hover:text-white"
                                                            href="/detail/{{ $schedule->id }}">Detail</a>
                                                    </button></td>
                                            </tr>
                                            @php $iteration += 1; @endphp
                                        @endif
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
