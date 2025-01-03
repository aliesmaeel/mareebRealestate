<?php

namespace App\Http\Controllers;

use App\Models\ContactPage;
use App\Models\Property;
use App\Models\Section;
use App\Models\Seo;
use App\Models\SocialMedia;
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
        $socialMediaLinks = SocialMedia::Active()->get();
        $seo=Seo::where('page_name','team')->first();
        return view('our_team')
            ->with('seo',$seo)
            ->with('socialMediaLinks',$socialMediaLinks)
            ->with('latestProperties',$latestProperties)
            ->with('teams',$teams)
            ->with('contact',$contact)
            ->with('sections',$sections)
            ->with('footer',$footer);
    }
}
