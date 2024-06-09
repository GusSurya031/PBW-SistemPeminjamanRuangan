@extends('dashboards.layouts.main')

@section('container')
    <div class="overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="text-3xl text-black pb-6">Ruangan</h1>

            <div class="w-full">
                <p class="text-xl pb-3 flex items-center">
                    <i class="fas fa-list mr-3"></i> List Ruangan Perkuliahan
                </p>
                <div class="bg-white overflow-auto">
                    <table class="min-w-full bg-white">
                        <thead class="bg-gray-800 text-white">
                            <tr class="text-center">
                                <th class=" py-3 px-4 uppercase font-semibold text-sm">No</th>
                                <th class=" py-3 px-4 uppercase font-semibold text-sm">Id</th>
                                <th class=" py-3 px-4 uppercase font-semibold text-sm">Nama Ruangan</th>
                                <th class=" py-3 px-4 uppercase font-semibold text-sm">Id Fasilitas</th>
                                <th class=" py-3 px-4 uppercase font-semibold text-sm">Gedung</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            @foreach ($rooms as $room)
                                <tr class="text-center">
                                    <td class=" py-3 px-4">{{ $loop->iteration }}</td>
                                    <td class=" py-3 px-4">{{ $room->id }}</td>
                                    <td class=" py-3 px-4">{{ $room->room_name }}</td>
                                    <td class=" py-3 px-4">{{ $room->facilities->id }}</td>
                                    <td class=" py-3 px-4">{{ $room->buildings->building_name }}</td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </main>
    </div>
@endsection
