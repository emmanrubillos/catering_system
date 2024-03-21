<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationInclusion extends Model
{
    use HasFactory;

    protected $fillable = [
        'reservation_id',
        'inclusion_id',
    ];
    
    public function reservation()
    {
       return $this->belongsTo(Reservation::class);
    }

    public function inclusion()
    {
       return $this->belongsTo(Inclusion::class);
    }
}
