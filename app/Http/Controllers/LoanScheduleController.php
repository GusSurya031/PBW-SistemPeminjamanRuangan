<?php

namespace App\Http\Controllers;

use App\Models\LoanSchedule;
use Illuminate\Http\Request;

class LoanScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboards.schedule');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboards.forms');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
