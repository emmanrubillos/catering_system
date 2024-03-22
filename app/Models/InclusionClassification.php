<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InclusionClassification extends Model
{
    use HasFactory;

    protected $fillable = [
        'inclusion_id',
        'classification_id',
    ];
}
