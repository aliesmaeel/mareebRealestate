<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $fillable=['image','text','links','copy_write','active'];

    protected $casts = [
        'links' => 'json',
    ];

    public function scopeActive($query)
    {
        return $query->where('active',true);
    }


}
