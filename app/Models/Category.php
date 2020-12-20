<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    public function service(){
        return $this->hasMany(ServiceOffer::class);
    }
    public function categoryAdmin(){
        return $this->belongsTo(User::class, "admin", "id");
    }
}
