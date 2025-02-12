<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    protected $fillable=['name','link','image','active'];
    public function scopeActive($query){
        return $query->where('active',1);
    }
}
