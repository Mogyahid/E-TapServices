<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientRequestService extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class, "category_id", "id");
    }
    public function customer()
    {
        return $this->belongsTo(User::class, "customer_id", "id");
    }
    // public function provider()
    // {
    //     return $this->belongsTo(Provider::class, "provider_id", "id");
    // }
    public function serviceOffer()
    {
        return $this->belongsTo(ServiceOffer::class, "serviceOffer_id", "id"); # The left side is the foreign key
    }
    public function requestItems()
    {
        return $this->hasMany(ServiceItem::class, "service_id", "id");
    }
}
