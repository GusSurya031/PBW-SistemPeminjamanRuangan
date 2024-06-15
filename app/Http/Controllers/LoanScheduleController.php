<?php

namespace App\Http\Controllers;

use App\Models\LoanSchedule;
use App\Models\Room;
use App\Models\User;
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
        return view('dashboards.forms', compact('user', 'rooms'));
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
        return redirect('/dashboard');
    }


    /**
     * Display the specified resource.
     */
    public function show(LoanSchedule $loanSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
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
