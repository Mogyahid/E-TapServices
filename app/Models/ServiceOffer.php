<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceOffer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function serviceItem()
    {
        return $this->hasMany(ServiceItem::class, "service_id", "id");
    }

    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
    
    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }
}
