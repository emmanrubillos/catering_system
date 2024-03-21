<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entourage extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'reservation_id',
        'description',
        'max_person',
    ];
    
    public function reservation()
    {
       return $this->belongsTo(Reservation::class);
    }
}