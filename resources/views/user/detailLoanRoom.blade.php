@extends('layouts.main')

@section('container')
    <section class="container xl:max-w-7xl mx-auto px-4 mt-[128px] md:mt-[120px]">
        <div class="header flex md:grid md:grid-cols-3 gap-4 justify-center items-center pb-12 border-b-2 relative">
            <div class="absolute top-0 left-0 md:relative">
                <button class="p-3 md:p-4 border-2 text-stone-400 border-stone-400 rounded-full"
                    onclick="window.history.back();">
                    <i class="fas fa-chevron-left"></i>
                </button>
            </div>
            <div class="text-center">
                <h3 class="text-stone-400 text-xl">Gedung {{ $roomBuilding->buildings->building_name }}</h3>
                <h1 class="text-center font-bold text-4xl md:text-5xl uppercase font-light mt-4">Ruangan
                    {{ $detailRoomLoan->rooms->room_name }}
                </h1>
            </div>
            <div class="hidden md:block text-right">
                <p>{{ $time['start'] }} - {{ $time['end'] }}</p>
                <p>{{ $detailRoomLoan->purpose }}</p>
                <p>
                    @switch ($detailRoomLoan->status_id)
                        @case(-1)
                            <span class="inline-block w-[14px] h-[14px] rounded-full mr-2 bg-red-400">
                            </span>
                            Rejected
                        @break

                        @case(0)
                            <span class="inline-block w-[14px] h-[14px] rounded-full mr-2 bg-stone-400"></span>
                            Available
                        @break

                        @case(1)
                            <span class="inline-block w-[14px] h-[14px] rounded-full mr-2 bg-yellow-400"></span>
                            Pending
                        @break

                        @case(2)
                            <span class="inline-block w-[14px] h-[14px] rounded-full mr-2 bg-green-400"></span>
                            Accepted
                        @break

                        @default
                            <span class="inline-block w-[14px] h-[14px] rounded-full mr-2 bg-blue-400"></span>
                            Busy
                    @endswitch
                </p>
            </div>
        </div>
        <div class="overflow-auto">
            <table class="min-w-full bg-white mt-4">
                <thead class="text-xl font-bold bg-stone-900 text-white">
                    <tr class="">
                        <th class="text-left py-3 px-4 font-semibold">No</th>
                        <th class="text-left py-3 px-4 font-semibold">Nama Peminjam</th>
                        <th class="text-left py-3 px-4 font-semibold">Status</th>
                        <th class="text-left py-3 px-4 font-semibold">Tanggal</th>
                        <th class="text-left py-3 px-4 font-semibold">Jam</th>
                        <th class="text-left py-3 px-4 font-semibold">Info</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($allRooms as $allRoom)
                        <tr class="">
                            <td class="text-left py-3 px-4">{{ $loop->iteration }}</td>
                            <td class="text-left py-3 px-4">{{ $allRoom->user->name }}</td>
                            <td class="text-left py-3 px-4">
                                @switch ($allRoom->status_id)
                                    @case(-1)
                                        <span class="inline-block w-[14px] h-[14px] rounded-full mr-2 bg-red-400">
                                        </span>
                                        Rejected
                                    @break

                                    @case(0)
                                        <span class="inline-block w-[14px] h-[14px] rounded-full mr-2 bg-stone-400"></span>
                                        Available
                                    @break

                                    @case(1)
                                        <span class="inline-block w-[14px] h-[14px] rounded-full mr-2 bg-yellow-400"></span>
                                        Pending
                                    @break

                                    @case(2)
                                        <span class="inline-block w-[14px] h-[14px] rounded-full mr-2 bg-green-400"></span>
                                        Accepted
                                    @break

                                    @default
                                        <span class="inline-block w-[14px] h-[14px] rounded-full mr-2 bg-blue-400"></span>
                                        Busy
                                @endswitch
                            </td>
                            <td class="text-left py-3 px-4">{{ $allRoom->loan_date }}</td>
                            <td class="text-left py-3 px-4">{{ $allRoom->start_time }} -
                                {{ $allRoom->end_time }}
                            </td>
                            <td class="text-left py-3 px-4 w-1/4">{{ $allRoom->purpose }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="my-16 flex flex-col gap-8 items-center">
            <h3 class="text-2xl">Fasilitas</h3>
            <div class="flex flex-wrap items-center justify-center gap-8">
                <p>
                    <span
                        class="rounded-full border border-stone-900 p-3 mr-2 font-bold">{{ $roomBuilding->facilities->chair }}
                    </span>
                    Kursi
                </p>
                <p><span
                        class="rounded-full border border-stone-900 p-3 mr-2 font-bold">{{ $roomBuilding->facilities->table }}</span>
                    Meja</p>
                <p>
                    <span
                        class="rounded-full border border-stone-900 p-3 mr-2 font-bold">{{ $roomBuilding->facilities->ac }}
                    </span> AC
                </p>
                <p>
                    <span
                        class="rounded-full border border-stone-900 p-3 mr-2 font-bold">{{ $roomBuilding->facilities->lcd }}
                    </span> Proyektor
                </p>
                <p>
                    <span
                        class="rounded-full border border-stone-900 p-3 mr-2 font-bold">{{ $roomBuilding->facilities->board }}
                    </span> Papan Tulis
                </p>
                <p>
                    <span
                        class="rounded-full border border-stone-900 p-3 mr-2 font-bold">{{ $roomBuilding->facilities->lamp }}
                    </span> Lampu
                </p>
            </div>
            @switch ($detailRoomLoan->status_id)
                @case(-1)
                    <div class="my-12">
                        <button
                            class="p-4 w-full border border-2 border-red-500 text-red-500 text-2xl outline outline-red-500 outline-offset-4 font-bold "
                            disabled>
                            Ditolak
                        </button>
                    </div>
                @break

                @case(0)
                    <div>
                        <button
                            class="mt-6 border-stone-900 rounded-xl text-xl text-stone-900 border border-stone-900 border-2 px-4 py-2 font-bold transform transition duration-200 ease-in-out hover:-translate-y-1 hover:shadow-lg hover:bg-stone-900 hover:text-white">
                            <a href="/forms">Pinjam Ruangan FMIPA</a>
                        </button>
                    </div>
                @break

                @case(1)
                    <div class="my-12">
                        <button
                            class="p-4 w-full border border-2 border-yellow-400 text-yellow-400 text-2xl outline outline-yellow-400 outline-offset-4 font-bold ">
                            Pending
                        </button>
                    </div>
                @break

                @case(2)
                    <div class="my-12">
                        <button
                            class="p-4 w-full border border-2 border-green-500 text-green-500 text-2xl outline outline-green-500 outline-offset-4 font-bold ">
                            Sudah Diterima
                        </button>
                    </div>
                @break

                @default
                    <span class="inline-block w-[14px] h-[14px] rounded-full mr-2 bg-blue-400"></span>
                    Busy
            @endswitch
        </div>
    </section>
@endsection
