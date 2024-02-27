<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerEventDetail extends Model
{
    use HasFactory;

    // Define the fillable attributes
    protected $fillable = [
        'full_name',
        'event_type',
        'package_type',
        'guest',
    ];


}
