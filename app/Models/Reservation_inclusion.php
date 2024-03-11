<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reservation;
use App\Models\Inclusion;

class Reservation_inclusion extends Model
{
    use HasFactory;

    protected $fillable = [
        'reservation_id',
        'inclusion_id',
    ];
    public function Reservation()
    {
       return $this->belongsTo('reservation_id');
    }
    public function Inclusion()
    {
       return $this->belongsTo('inclusion_id');
    }
}
