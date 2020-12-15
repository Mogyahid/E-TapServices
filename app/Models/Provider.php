<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Provider extends Model
{
    use HasFactory;

    protected $guarded = [];
    // public function services()
    // {
    //     return $this->belongsToMany(Service::class);
    // }

    
    public function services()
    {
        return $this->hasMany(ServiceOffer::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // public function useraddress()
    // {
    //     return $this->hasOne(Address::class);
    // }

    // public function category(){
    //     return $this->hasMany(Category::class);
    // }
}
