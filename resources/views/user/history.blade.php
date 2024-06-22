@extends('layouts.main')

@section('container')
    <section class="container xl:max-w-7xl mx-auto px-4 mt-[128px] md:mt-[120px]">
        {{-- Header --}}
        <div class="relative pb-12 border-b-2 border-stone-300 flex flex-col items-center">
            {{-- Button to back page --}}
            <button class="absolute left-0 p-3 md:p-4 border-2 text-stone-400 border-stone-400 rounded-full"
                onclick="window.history.back();">
                <i class="fas fa-chevron-left"></i>
            </button>
            {{-- title --}}
            <h3 class="text-center text-sm text-stone-400 md:text-xl mt-8">Daftar riwayat peminjaman gedung
                anda. </h3>
            <h1 class="text-center font-bold text-5xl uppercase font-light mt-4">PEMINJAMAN ANDA</h1>
        </div>
        {{-- content --}}
        <div class="overflow-auto">
            <table class="min-w-full bg-white mt-4">
                {{-- judul tabel --}}
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
                {{-- isi table --}}
                <tbody class="text-gray-700">
                    @foreach ($loanSchedules as $loanSchedule)
                        <tr class="border-b-2 {{ $loop->iteration % 2 === 1 ? 'bg-stone-100' : '' }}">
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
                            <td class="text-right py-3 px-4"> <button class="relative border border-stone-900 rounded-md">
                                    <a class="active block py-2 px-3 hover:bg-stone-900 hover:text-white"
                                        href="/detail/{{ $loanSchedule->id }}">Detail</a>
                                </button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
