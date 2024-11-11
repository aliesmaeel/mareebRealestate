<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function  index () {
        $footer=\App\Models\Footer::Active()->first();
        $teams=Team::with('section')->get();
        $sections=Section::all();
        return view('our_team')
            ->with('teams',$teams)
            ->with('sections',$sections)
            ->with('footer',$footer);
    }
}
