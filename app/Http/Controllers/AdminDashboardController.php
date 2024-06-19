<?php

namespace App\Http\Controllers;

use App\Models\LoanSchedule;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $loanSchedulesAll = LoanSchedule::with('rooms')->get();
        $loanSchedulesCurrent = LoanSchedule::with('rooms')
            ->where('status', 'In Progress')
            ->orderBy('loan_date', 'desc')
            ->get();
        $today = Carbon::today()->toDateString();
        $todayLoan = LoanSchedule::with('rooms')->where('loan_date', $today)->get();
        // dd($loanSchedules);

        return view('dashboards.dashboard', compact('loanSchedulesAll', 'loanSchedulesCurrent', 'todayLoan'));
    }
}
