<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function sales() {
        return $this->hasMany('App\Models\Sales');
    }

    public function company() {
        return $this->belongsTo('App\Models\Companies');
    }
}
