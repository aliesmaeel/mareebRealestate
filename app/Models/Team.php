<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Team extends Model
{
    use HasFactory;

    protected $fillable=['name','image','phone','email'];

    public function section(): BelongsTo
    {
        return $this->belongsTo(Section::class,'section_id');
    }
}
