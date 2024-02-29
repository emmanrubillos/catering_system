<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation_billing extends Model
{
    use HasFactory;

    protected $fillable = [
        'reservation_id',
        'name',
        'amount',
    ];
}
