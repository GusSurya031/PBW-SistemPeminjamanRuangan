@extends('dashboards.layouts.main')

@section('container')
    <div class="overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="text-3xl text-black pb-6">Fasilitas</h1>

            <div class="w-full">
                <p class="text-xl pb-3 flex items-center">
                    <i class="fas fa-list mr-3"></i> Fasilitas Ruangan Perkuliahan
                </p>
                <div class="bg-white overflow-auto">
                    <table class="min-w-full bg-white">
                        <thead class="bg-gray-800 text-white">
                            <tr class="text-center">
                                <th class=" py-3 px-4 uppercase font-semibold text-sm">no</th>
                                <th class=" py-3 px-4 uppercase font-semibold text-sm">id</th>
                                <th class=" py-3 px-4 uppercase font-semibold text-sm">Kursi</th>
                                <th class=" py-3 px-4 uppercase font-semibold text-sm">Meja</th>
                                <th class=" py-3 px-4 uppercase font-semibold text-sm">AC</th>
                                <th class=" py-3 px-4 uppercase font-semibold text-sm">Proyektor</th>
                                <th class=" py-3 px-4 uppercase font-semibold text-sm">Papan Tulis</th>
                                <th class=" py-3 px-4 uppercase font-semibold text-sm">Lampu</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            @foreach ($facilities as $facility)
                                <tr class="text-center">
                                    <td class=" py-3 px-4">{{ $loop->iteration }}</td>
                                    <td class=" py-3 px-4">{{ $facility->id }}</td>
                                    <td class=" py-3 px-4">{{ $facility->chair }}</td>
                                    <td class=" py-3 px-4">{{ $facility->table }}</td>
                                    <td class=" py-3 px-4">{{ $facility->ac }}</td>
                                    <td class=" py-3 px-4">{{ $facility->screen_lcd }}</td>
                                    <td class=" py-3 px-4">{{ $facility->board }}</td>
                                    <td class=" py-3 px-4">{{ $facility->lamp }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </main>
    </div>
@endsection
