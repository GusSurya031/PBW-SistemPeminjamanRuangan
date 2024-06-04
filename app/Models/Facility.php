<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;

    protected $fillable = [
        'chair',
        'table',
        'ac',
        'lcd',
        'screen_lcd',
        'board',
        'lamp'
    ];
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
