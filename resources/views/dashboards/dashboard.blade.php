@extends('dashboards.layouts.main')

@section('container')
    <section class="overflow-x-hidden flex flex-col p-6">
        {{-- title --}}
        <h1 class="text-5xl font-light pb-6">Dashboard Admin</h1>
        {{-- div count loan schedule --}}
        <div class="grid grid-cols-3 gap-12">
            <div class="flex flex-col gap-2 px-8 py-12 bg-stone-100 rounded-md">
                <span class="text-6xl font-bold"> {{ $loanSchedulesCurrent->count() }}</span>
                <p>Permintaan Peminjaman Baru</p>
            </div>
            <div class="flex flex-col gap-2 px-8 py-12 bg-stone-100 rounded-md">
                <span class="text-6xl font-bold"> {{ $todayLoan->count() }}</span>
                <p>Permintaan Peminjaman Hari Ini</p>
            </div>
            <div class="flex flex-col gap-2 px-8 py-12 bg-stone-100 rounded-md">
                <span class="text-6xl font-bold"> {{ $loanSchedulesAll->count() }}</span>
                <p>Total Peminjaman Ruangan</p>
            </div>
        </div>
        {{-- content --}}
        <div class="w-full my-8">
            <p class="text-2xl pb-3 flex items-center font-semibold">
                <i class="fas fa-list mr-3"></i> Permintaan Peminjaman Baru
            </p>
            <div class="bg-white overflow-auto">
                <div>
                    <table class="min-w-full bg-white mt-4">
                        <thead class="text-xl font-bold bg-stone-900 text-white">
                            <tr class="">
                                <th class="text-left py-3 px-4 font-semibold">No</th>
                                <th class="text-left py-3 px-4 font-semibold">Nama Ruangan</th>
                                <th class="text-left py-3 px-4 font-semibold">Status</th>
                                <th class="text-left py-3 px-4 font-semibold">Tanggal</th>
                                <th class="text-left py-3 px-4 font-semibold">Jam</th>
                                <th class="text-left py-3 px-4 font-semibold">Info</th>
                                <th class="text-left py-3 px-4 font-semibold"></th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            @foreach ($loanSchedulesCurrent as $loanSchedule)
                                <tr class="border-b-2">
                                    <td class="text-left py-3 px-4">{{ $loop->iteration }}</td>
                                    <td class="text-left py-3 px-4">{{ $loanSchedule->rooms->room_name }}</td>
                                    <td class="text-left py-3 px-4">
                                        @switch ($loanSchedule->status_id)
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
        </div>
    </section>
@endsection
