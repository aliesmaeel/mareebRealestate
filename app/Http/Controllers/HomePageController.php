<?php

namespace App\Http\Controllers;

use App\Models\ContactPage;
use App\Models\Footer;
use App\Models\HomePage;
use App\Models\Services;
use App\Models\SisterCompany;
use App\Models\Team;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        $home=HomePage::Active()->with('images')->first();
        $sisterCompanies = SisterCompany::all();
        $repeatedSisterCompanies = collect();
        for ($i = 0; $i < 10; $i++) {
            $repeatedSisterCompanies = $repeatedSisterCompanies->merge($sisterCompanies);
        }
        $sisterCompanies = $repeatedSisterCompanies;

        $teams=Team::all();
        $services=Services::all();
        $footer=Footer::Active()->first();
        $contact=ContactPage::Active()->first();
        return view('home')
            ->with('home',$home)
            ->with('footer',$footer)
            ->with('teams',$teams)
            ->with('services',$services)
            ->with('sisterCompanies',$sisterCompanies)
            ->with('contact',$contact);
    }
}
