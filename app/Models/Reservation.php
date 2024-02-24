<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'package_id',
        'event_name',
        'email_address',
        'transaction_number',
        'accepted_by',
        'pax',
        'theme_color',
        'meal_type',
        'descriptions',
        'service_date',
        'status',
    ];
}
