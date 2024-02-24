<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food_classification extends Model
{
    use HasFactory;

    protected $fillable = [
        'package_id',
        'classification',
        'number',
    ];
}
