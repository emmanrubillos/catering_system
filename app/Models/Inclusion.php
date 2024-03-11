<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Classification;

class Inclusion extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'classification_id',
        'description',
    ];
    public function Classification()
    {
       return $this->belongsTo('classification_id');
    }
}
