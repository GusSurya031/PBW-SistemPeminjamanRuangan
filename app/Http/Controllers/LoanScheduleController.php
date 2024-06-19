<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\LoanSchedule;
use App\Models\Room;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoanScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loanSchedules = LoanSchedule::with('rooms')->get();
        $rooms = Room::with('loan_schedules')->get();
        return view('dashboards.schedule', compact('loanSchedules', 'rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        $rooms = Room::all();
        $buildings = Building::all();
        return view('user.loanRoom', compact('user', 'rooms', 'buildings'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            // "name" => "required|max:255",
            // "user_nim" => "required| max:10| regex:/^([0-9\s\-\+\(\)]*)$/",
            "room_id" => "required",
            "loan_date" => "required|date",
            "end_loan_date" => "required|date",
            "start_time" => "required|date_format:H:i",
            "end_time" => "required|date_format:H:i",
            "purpose" => "required",
        ]);
        $validated['name'] = Auth::user()->name;
        $validated['user_nim'] = Auth::user()->nim;
        $validated['status'] = 'In Progress';

        LoanSchedule::create($validated);
        return redirect('/building');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $detailRoomLoan = LoanSchedule::with('rooms')->find($id);
        // dd($detailRoomLoan);
        $roomBuilding = Room::with('buildings', 'facilities')->find($detailRoomLoan->rooms->building_id);
        // dd($roomBuilding);

        //time
        $time['start'] = Carbon::createFromFormat('H:i:s', $detailRoomLoan->start_time);
        $time['end'] = Carbon::createFromFormat('H:i:s', $detailRoomLoan->end_time);
        $time['start'] = $time['start']->format('H:i');
        $time['end'] = $time['end']->format('H:i');

        $allRooms = LoanSchedule::with('user')->where('room_id', $detailRoomLoan->room_id)->get();
        // dd($allRooms);

        return view('user.detailLoanRoom', compact('detailRoomLoan', 'roomBuilding', 'time', 'allRooms'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function history()
    {
        $idUser = Auth()->user()->nim;
        $loanSchedules = LoanSchedule::with('rooms')->where('user_nim', $idUser)->get();
        // dd($loanSchedules);
        return view('user.history', compact('loanSchedules'));
    }

    public function edit(LoanSchedule $loanSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LoanSchedule $loanSchedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LoanSchedule $loanSchedule)
    {
        //
    }
}
