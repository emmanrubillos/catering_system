<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'description',
        'price',
        'number_of_person',
        'main_dish',
        'side_dish',
    ]; 

    protected $appends = ['service_inclusion_ids'];

    public function getServiceInclusionIdsAttribute()
    {
        return $this->serviceInclusions()->get()->pluck('inclusion_id')->toArray();
    }

    public function serviceInclusions()
    {
        return $this->hasMany(ServiceInclusion::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($service) {
            $service->serviceInclusions()->delete(); // Corrected method name
        });
    }
}
