<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'id';

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
