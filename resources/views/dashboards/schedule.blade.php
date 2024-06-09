@extends('dashboards.layouts.main')

@section('container')
    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="text-3xl text-black pb-6">Schedules</h1>

            <div class="w-full mt-6">
                <p class="text-xl pb-3 flex items-center">
                    <i class="fas fa-list mr-3"></i> Jadwal Penggunaan Ruangan
                </p>
                <div class="bg-white overflow-auto">
                    <table class="min-w-full bg-white">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">No</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nama Ruangan</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Tanggal</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Pukul</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Status</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            @foreach ($loanSchedules as $schedule)
                                <tr>
                                    <td class="text-left py-3 px-4">{{ $loop->iteration }}</td>
                                    <td class="text-left py-3 px-4">{{ $schedule->rooms->room_name }}</td>
                                    <td class="text-left py-3 px-4">{{ $schedule->loan_date }}</td>
                                    <td class="text-left py-3 px-4">{{ $schedule->start_time }}</td>
                                    <td class="text-left py-3 px-4"> {{ $schedule->status }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
@endsection
