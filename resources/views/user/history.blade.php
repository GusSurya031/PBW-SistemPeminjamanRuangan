@extends('layouts.main')

@section('container')
    <section class="container xl:max-w-7xl mx-auto px-4 mt-[164px] md:mt-[120px]">
        <div class="relative pb-12 border-b-2 border-stone-300 flex flex-col items-center">
            <button class="absolute left-0 p-4 border-2 text-stone-400 border-stone-400 rounded-full"
                onclick="window.history.back();">
                <i class="fas fa-chevron-left"></i>
            </button>
            <h3 class="text-stone-400 text-xl">Daftar riwayat peminjaman gedung anda. </h3>
            <h1 class="text-center font-bold text-5xl uppercase font-light mt-4">PEMINJAMAN ANDA</h1>
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
                    @foreach ($loanSchedules as $loanSchedule)
                        <tr class="">
                            <td class="text-left py-3 px-4">{{ $loop->iteration }}</td>
                            <td class="text-left py-3 px-4">{{ $loanSchedule->rooms->room_name }}</td>
                            <td class="text-left py-3 px-4">{{ $loanSchedule->status }}</td>
                            <td class="text-left py-3 px-4">{{ $loanSchedule->loan_date }}</td>
                            <td class="text-left py-3 px-4">{{ $loanSchedule->start_time }} -
                                {{ $loanSchedule->end_time }}
                            </td>
                            <td class="text-left py-3 px-4 w-1/4">{{ $loanSchedule->purpose }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
