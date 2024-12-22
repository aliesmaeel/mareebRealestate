<?php

namespace App\Http\Controllers;

use App\Models\Community;
use App\Models\ContactPage;
use App\Models\Footer;
use App\Models\HomePage;
use App\Models\Property;
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
        $communitiesId = Property::Active()->get()->pluck('community_id')->unique();
        $communities = Community::whereIn('id',$communitiesId)->get();
        $propertyTypes=$this->getPropertyTypes();

        return view('home')
            ->with('home',$home)
            ->with('propertyTypes',$propertyTypes)
            ->with('footer',$footer)
            ->with('teams',$teams)
            ->with('services',$services)
            ->with('sisterCompanies',$sisterCompanies)
            ->with('communities',$communities)
            ->with('contact',$contact);
    }

    public function getPropertyTypes(){
        $propertyTypes = [
            'Labour Camp' => 'Labour Camp',
            'Residential Building' => 'Residential Building',
            'Commercial Floors' => 'Commercial Floors',
            'Showroom' => 'Showrooms',
            'Apartment/Flat' => 'Apartment/Flat',
            'Duplex' => 'Duplex',
            'Land/Plot' => 'Land/Plot',
            'Penthouse' => 'Penthouse',
            'Townhouse' => 'Townhouse',
            'Villa' => 'Villa',
            'Factory' => 'Factory',
            'Full Floor' => 'Full Floor',
            'Office Space' => 'Office Space',
            'Shop' => 'Shop',
            'Whole Building' => 'Whole Building',
            'Warehouse' => 'Warehouse',
        ];
        return $propertyTypes;
    }

}
