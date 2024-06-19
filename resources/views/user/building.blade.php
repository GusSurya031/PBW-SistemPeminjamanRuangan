@extends('layouts.main')

@section('container')
    <section class="container xl:max-w-7xl mx-auto px-4 mt-[164px] md:mt-[120px]">
        <div>
            <h1 class="text-center text-6xl uppercase font-light my-16">List Seluruh Gedung di Fakultas MIPA</h1>
        </div>
        <div>
            @foreach ($buildings as $building)
                <div x-data="{ activeAccordion: false }" class="space-y-2 py-6 border-b-2 border-stone-900">
                    <div @click="activeAccordion= !activeAccordion" :class="{ 'font-bold': activeAccordion }"
                        class="flex justify-between items-center">
                        <div class="text-2xl flex flex-wrap max-w-[120px] w-full ">
                            <h2>Gedung <br /><span class="text-5xl font-bold italic ">{{ $building->building_name }}</span>
                            </h2>
                        </div>
                        <div class="flex gap-8">
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
                        <div class="rounded-full border border-stone-900 p-3"
                            :class="{ 'bg-stone-900 text-white ': activeAccordion }">
                            <i class="fas fa-chevron-right @click="activeAccordion=!activeAccordion"
                                :class="{ 'rotate-90 ': activeAccordion }"></i>
                        </div>
                    </div>

                    <div x-cloak x-collapse x-show="activeAccordion">
                        <table class="min-w-full bg-white mt-4">
                            <thead class="text-xl font-bold bg-stone-900 text-white">
                                <tr class="">
                                    <th class="text-left py-3 px-4 uppercase font-semibold">No</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold">Nama Ruangan</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold">Status</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold">Info</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold"></th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                @php $iteration = 1; @endphp
                                @foreach ($loan_schedules as $schedule)
                                    @foreach ($building->rooms as $room)
                                        @if ($schedule->rooms->id === $room->id)
                                            <tr class="border-b-2">
                                                <td class="text-left py-3 px-4">
                                                    {{ $iteration }}</td>
                                                <td class="text-left py-3 px-4">
                                                    {{ $schedule->rooms->room_name }}
                                                </td>
                                                <td class="text-left py-3 px-4">
                                                    <span
                                                        class="inline-block w-[14px] h-[14px] rounded-full mr-2 
                                                        @if ($schedule->status === 'In Progress') bg-yellow-400 
                                                        @elseif ($schedule->status === 'In Using') bg-red-600 
                                                        @else bg-green-600 @endif ">
                                                    </span>
                                                    {{ $schedule->status }}
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
