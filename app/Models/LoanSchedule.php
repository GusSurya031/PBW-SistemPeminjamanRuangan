<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'admin_id',
        'user_nim',
        'loan_date',
        'end_loan_date',
        'start_time',
        'end_time',
        'purpose',
        'status',
    ];

    public function admins()
    {
        return $this->belongsToMany(Admin::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function rooms()
    {
        return $this->belongsToMany(Room::class);
    }
}
