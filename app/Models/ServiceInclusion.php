<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceInclusion extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'service_id',
        'classfication_id',
        'inclusion_id',
    ];

    public function service()
    {
       return $this->belongsTo(Service::class);
    }

    public function classification()
    {
       return $this->belongsTo(Classification::class);
    }

    public function inclusion()
    {
       return $this->belongsTo(Inclusion::class);
    }
}
