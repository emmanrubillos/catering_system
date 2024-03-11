<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reservation;

class Entourages extends Model
{
    use HasFactory;

    protected $fillable = [
        'reservation_id',
        'name',
        'description',
        'max_person',
    ];
    public function Reservation()
    {
        return $this->belongsTo('reservation_id');
    }
}
