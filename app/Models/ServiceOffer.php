<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceOffer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function serviceoffer()
    {
        return $this->hasMany(ServiceItem::class);
    }

    public function provider()
    {
        return $this->hasOne(Provider::class);
    }
    
    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }
}
