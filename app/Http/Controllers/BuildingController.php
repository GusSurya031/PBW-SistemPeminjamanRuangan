<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\LoanSchedule;
use App\Models\Room;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buildings = Building::all();
        // dd($buildings);
        // $loan_schedules = LoanSchedule::with('rooms')->where('room_id', $buildings->rooms->room_id);
        $loan_schedules = LoanSchedule::all();
        // dd($loan_schedules);
        // $rooms = Room::all();
        // return view('dashboards.building', compact('buildings'));
        return view('user.building', compact('buildings', 'loan_schedules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function showAdmin()
    {
        $buildings = Building::all();
        $loan_schedules = LoanSchedule::orderBy('loan_date', 'desc')->get();
        return view('dashboards.building', compact('buildings', 'loan_schedules'));
    }
}
