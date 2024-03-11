<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reservation;

class Reservation_billing extends Model
{
    use HasFactory;

    protected $fillable = [
        'reservation_id',
        'name',
        'amount',
    ];
    public function Reservation()
    {
        return $this->belongsTo('reservation_id');
    }
}
