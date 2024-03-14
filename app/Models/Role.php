<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [

        'first_name',
        'middle_name',
        'last_name',
        'contact_number',
        'street',
        'barangay',
        'city',
        'email',
        'password',
    ];

}
