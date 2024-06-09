<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
        'phone_number',
    ];

    public function loan_schedules()
    {
        return $this->hasMany(LoanSchedule::class);
    }
}
