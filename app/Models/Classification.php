<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function inclusionclassifications()

    {
       return $this->hasMany(InclusionClassification::class);
    }
}
