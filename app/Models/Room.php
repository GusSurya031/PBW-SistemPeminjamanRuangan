<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'building_id',
        'facility_id',
        'room_name',
        'number_of_floor',
        'length',
        'width',
        'capacity',
        'function',
        'description',
    ];

    public function buildings()
    {
        return $this->belongsTo(Building::class);
    }
    public function facilties()
    {
        return $this->belongsTo(Facility::class);
    }
    public function loan_schedules()
    {
        return $this->belongsToMany(LoanSchedule::class);
    }
}
