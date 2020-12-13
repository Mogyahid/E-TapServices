<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        return $this->hasMany(Service::class);
    }

    // public function category(){
    //     return $this->hasMany(Category::class);
    // }
}
