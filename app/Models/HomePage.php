<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
protected $fillable= [
 'name',
 'video_section_web',
'video_section_mobile',
'about_section_text',
'about_section_image',
'what_we_do_section_text',
'our_team_section_text',
'blogs_section_text',
'active'
];
}
