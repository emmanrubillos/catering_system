<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;
use App\Models\Classification;
use App\Models\Inclusion;

class ServicesInclusion extends Model
{
    use HasFactory;

    protected $fillable = [

        'service_id',
        'classification_id',
        'inclusion_id',
        'total_number',
    ];
    public function Service()
    {
       return $this->belongsTo('service_id');
    }
    public function Classification()
    {
       return $this->belongsTo('classification_id');
    }
    public function Inclusion()
    {
       return $this->belongsTo('inclusion_id');
    }
}
