@extends('layouts.main')

@section('container')
    <section class="container xl:max-w-7xl mx-auto px-4 mt-[164px] md:mt-[120px]">
        <div class="header grid grid-cols-3 gap-4 justify-between pb-12 border-b-2">
            <div>
                <button class="p-4 border-2 text-stone-400 border-stone-400 rounded-full" onclick="window.history.back();">
                    <i class="fas fa-chevron-left"></i>
                </button>
            </div>
            <div class="text-center">
                <h3 class="text-stone-400 text-xl">Gedung {{ $roomBuilding->buildings->building_name }}</h3>
                <h1 class="text-center font-bold text-5xl uppercase font-light mt-4">Ruangan
                    {{ $detailRoomLoan->rooms->room_name }}
                </h1>
            </div>
            <div class="text-right">
                <p>{{ $time['start'] }} - {{ $time['end'] }}</p>
                <p>{{ $detailRoomLoan->purpose }}</p>
                <p>
                    <span
                        class="inline-block w-[14px] h-[14px] rounded-full mr-2 
                        @if ($detailRoomLoan->status === 'In Progress') bg-yellow-400 
                        @elseif ($detailRoomLoan->status === 'In Using') bg-red-600
                        @else bg-green-600 @endif ">
                    </span>
                    {{ $detailRoomLoan->status }}
                </p>
            </div>
        </div>
        <div>
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
                            <td class="text-left py-3 px-4">{{ $allRoom->status }}</td>
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
            <div class="flex gap-8">
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
            <div>
                <button
                    class="mt-6 border-stone-900 rounded-xl text-xl text-stone-900 border border-stone-900 border-2 px-4 py-2 font-bold transform transition duration-200 ease-in-out hover:-translate-y-1 hover:shadow-lg hover:bg-stone-900 hover:text-white">
                    <a href="/forms">Pinjam Ruangan FMIPA</a>
                </button>
            </div>
        </div>
    </section>
@endsection
