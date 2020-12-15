<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceItem extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function serviceOffer()
    {
        return $this->belongsTo(serviceOffer::class, "service_id", "id");
    }
}
