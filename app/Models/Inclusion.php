<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inclusion extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    protected $appends = ['inclusion_classification_ids'];

    public function getInclusionClassificationIdsAttribute()
    {
        return $this->inclusionClassifications()->get()->pluck('classification_id')->toArray();
    }

    public function inclusionClassifications()
    {
        return $this->hasMany(InclusionClassification::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($inclusion) {
            $inclusion->inclusionClassifications()->delete();
        });
    }
}



