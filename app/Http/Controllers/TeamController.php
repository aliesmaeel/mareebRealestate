<?php

namespace App\Http\Controllers;

use App\Models\ContactPage;
use App\Models\Property;
use App\Models\Section;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function  index () {
        $footer=\App\Models\Footer::Active()->first();
        $teams=Team::with('section')->get();
        $sections=Section::all();
        $contact=ContactPage::Active()->first();
        $latestProperties = Property::Active()->orderBy('created_at','desc')->get()->take(3);

        return view('our_team')
            ->with('latestProperties',$latestProperties)
            ->with('teams',$teams)
            ->with('contact',$contact)
            ->with('sections',$sections)
            ->with('footer',$footer);
    }
}
