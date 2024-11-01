<?php

namespace App\Http\Controllers;

use App\Models\HomePage;
use App\Models\Services;
use App\Models\SisterCompany;
use App\Models\Team;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        $home=HomePage::Active()->first();
        $sisterCompanies=SisterCompany::all();
        $teams=Team::all();
        $services=Services::all();

        return view('home')
            ->with('home',$home)
            ->with('teams',$teams)
            ->with('services',$services)
            ->with('sisterCompanies',$sisterCompanies);
    }
}
