<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\LoanSchedule;
use App\Models\Room;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    public function index()
    {
        $buildings = Building::all();
        $loan_schedules = LoanSchedule::orderBy('loan_date', 'desc')->get();
        return view('user.building', compact('buildings', 'loan_schedules'));
    }

    public function showAdmin()
    {
        $buildings = Building::all();
        $loan_schedules = LoanSchedule::orderBy('loan_date', 'desc')->get();
        return view('dashboards.building', compact('buildings', 'loan_schedules'));
    }
}
