@extends('dashboards.layouts.main')

@section('container')
    <section class="overflow-x-hidden p-6">
        <div class="header gap-4 justify-between pb-12 border-b-2 ">
            <div class="flex items-center gap-4">
                <button class="w-[50px] h-[50px] border-2 text-stone-400 border-stone-400 rounded-full"
                    onclick="window.history.back();">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <h1 class="text-left font-bold text-4xl uppercase font-light">Permintaan Peminjaman Ruangan</h1>
            </div>
            <div class="flex justify-between mt-8">
                <div class="">
                    <h3 class="text-stone-400 text-xl">Gedung {{ $roomBuilding->buildings->building_name }}</h3>
                    <h1 class="font-bold text-5xl uppercase">Ruangan
                        {{ $detailRoomLoan->rooms->room_name }}
                    </h1>
                </div>
                <div class="text-right">
                    <p class="text-2xl">{{ $time['start'] }} - {{ $time['end'] }}</p>
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
        </div>
        <div>
            <table class="min-w-full bg-white mt-4">
                <h3 class="text-2xl my-4">Jadwal Pemakaian {{ $detailRoomLoan->rooms->room_name }}</h3>
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
                        <tr class="border-b-2">
                            <td class="text-left py-3 px-4">{{ $loop->iteration }}</td>
                            <td class="text-left py-3 px-4">{{ $allRoom->user->name }}</td>
                            <td>
                                <span
                                    class="inline-block w-[14px] h-[14px] rounded-full mr-2 
                                    @if ($allRoom->status === 'In Progress') bg-yellow-400 
                                    @elseif ($allRoom->status === 'In Using') bg-red-600
                                    @else bg-green-600 @endif ">
                                </span>
                                {{ $allRoom->status }}
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
            <div class="max-w-[540px] w-full mx-auto">
                <div class="flex justify-between my-12">
                    <div class="flex flex-col gap-6">
                        <div class="">
                            <h6 class="text-lg font-bold">Tanggal Peminjaman</h6>
                            <p>{{ $detailRoomLoan->loan_date }}</p>
                        </div>
                        <div class="">
                            <h6 class="text-lg font-bold">Waktu Peminjaman</h6>
                            <p>{{ $detailRoomLoan->start_time }} - {{ $detailRoomLoan->end_time }}</p>
                        </div>
                        <div class="">
                            <h6 class="text-lg font-bold">Info Peminjaman</h6>
                            <p>{{ $detailRoomLoan->purpose }}</p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-6">
                        <div class="">
                            <h6 class="text-lg font-bold">Nama Peminjam</h6>
                            <p>{{ $detailRoomLoan->user->name }}</p>
                        </div>
                        <div class="">
                            <h6 class="text-lg font-bold">No Telephone</h6>
                            <p>{{ $detailRoomLoan->user->phone_number }}</p>
                        </div>
                        <div class="">
                            <h6 class="text-lg font-bold">Alamat Email</h6>
                            <p>{{ $detailRoomLoan->user->email }}</p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 text-center gap-8">
                    <form action="/admin/schedules/edit/{{ $detailRoomLoan->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="">
                            <input type="text" name="status" value="accept" hidden>
                            <button
                                class="py-4 w-full border border-2 border-green-500 text-green-500 text-2xl outline outline-green-500 outline-offset-4 font-bold ">
                                Terima
                            </button>
                        </div>
                    </form>
                    <form action="/admin/schedules/edit/{{ $detailRoomLoan->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="">
                            <input type="text" name="status" value="reject" hidden>
                            <button
                                class="py-4 w-full border border-2 border-red-500 text-red-500 text-2xl outline outline-red-500 outline-offset-4 font-bold ">
                                Tolak
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    </section>
@endsection
