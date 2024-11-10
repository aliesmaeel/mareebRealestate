<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable=['name','image'];

    public function section(){
        return $this->belongsTo(Section::class,'section_id');
    }
}
