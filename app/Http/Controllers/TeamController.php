<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function  index () {
        $footer=\App\Models\Footer::Active()->first();
        $teams=Team::all();
        return view('our_team')
            ->with('teams',$teams)
            ->with('footer',$footer);
    }
}
