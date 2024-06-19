@extends('dashboards.layouts.main')

@section('container')
    <section class="overflow-x-hidden container xl:max-w-7xl mx-auto p-6">
        <div class="pb-6 border-b-2 border-stone-300">
            <h1 class="text-left font-bold text-5xl uppercase font-light">LIST PEMINJAMAN OLEH USER</h1>
        </div>
        <div class="flex flex-col gap-4">
            <div class="my-4 flex flex-col gap-4">
                <h2 class="text-3xl font-semibold">Permintaan Peminjaman</h2>
                <table class="min-w-full bg-white">
                    <thead class="text-xl font-bold bg-stone-900 text-white">
                        <tr class="">
                            <th class="text-left py-3 px-4 font-semibold">No</th>
                            <th class="text-left py-3 px-4 font-semibold">Nama Peminjam</th>
                            <th class="text-left py-3 px-4 font-semibold">Status</th>
                            <th class="text-left py-3 px-4 font-semibold">Tanggal</th>
                            <th class="text-left py-3 px-4 font-semibold">Jam</th>
                            <th class="text-left py-3 px-4 font-semibold">Info</th>
                            <th class="text-left py-3 px-4 font-semibold"></th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach ($loanSchedulesAdvice as $loanSchedule)
                            <tr class="">
                                <td class="text-left py-3 px-4">{{ $loop->iteration }}</td>
                                <td class="text-left py-3 px-4">{{ $loanSchedule->rooms->room_name }}</td>
                                <td>
                                    <span
                                        class="inline-block w-[14px] h-[14px] rounded-full mr-2 
                                        @if ($loanSchedule->status === 'In Progress') bg-yellow-400 
                                        @elseif ($loanSchedule->status === 'In Using') bg-red-600
                                        @else bg-green-600 @endif ">
                                    </span>
                                    {{ $loanSchedule->status }}
                                </td>
                                <td class="text-left py-3 px-4">{{ $loanSchedule->loan_date }}</td>
                                <td class="text-left py-3 px-4">{{ $loanSchedule->start_time }} -
                                    {{ $loanSchedule->end_time }}
                                </td>
                                <td class="text-left py-3 px-4 w-1/4">{{ $loanSchedule->purpose }}
                                </td>
                                <td class="text-right py-3 px-4">
                                    <button class="relative border border-stone-900 rounded-md">
                                        <a class="active block py-2 px-3 hover:bg-stone-900 hover:text-white"
                                            href="{{ route('detail.schedules', ['id' => $loanSchedule->id]) }}">Detail</a>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="my-4 flex flex-col gap-4">
                <h2 class="text-3xl font-semibold">Riwayat Peminjaman</h2>
                <table class="min-w-full bg-white">
                    <thead class="text-xl font-bold bg-stone-900 text-white">
                        <tr class="">
                            <th class="text-left py-3 px-4 font-semibold">No</th>
                            <th class="text-left py-3 px-4 font-semibold">Nama Peminjam</th>
                            <th class="text-left py-3 px-4 font-semibold">Status</th>
                            <th class="text-left py-3 px-4 font-semibold">Tanggal</th>
                            <th class="text-left py-3 px-4 font-semibold">Jam</th>
                            <th class="text-left py-3 px-4 font-semibold">Info</th>
                            <th class="text-left py-3 px-4 font-semibold"></th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach ($loanSchedulesHistory as $loanSchedule)
                            <tr class="">
                                <td class="text-left py-3 px-4">{{ $loop->iteration }}</td>
                                <td class="text-left py-3 px-4">{{ $loanSchedule->rooms->room_name }}</td>
                                <td>
                                    <span
                                        class="inline-block w-[14px] h-[14px] rounded-full mr-2 
                                        @if ($loanSchedule->status === 'In Progress') bg-yellow-400 
                                        @elseif ($loanSchedule->status === 'In Using') bg-red-600
                                        @else bg-green-600 @endif ">
                                    </span>
                                    {{ $loanSchedule->status }}
                                </td>
                                <td class="text-left py-3 px-4">{{ $loanSchedule->loan_date }}</td>
                                <td class="text-left py-3 px-4">{{ $loanSchedule->start_time }} -
                                    {{ $loanSchedule->end_time }}
                                </td>
                                <td class="text-left py-3 px-4 w-1/4">{{ $loanSchedule->purpose }}
                                </td>
                                <td class="text-right py-3 px-4">
                                    <button class="relative border border-stone-900 rounded-md">
                                        <a class="active block py-2 px-3 hover:bg-stone-900 hover:text-white"
                                            href="{{ route('detail.schedules', ['id' => $loanSchedule->id]) }}">Detail</a>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
