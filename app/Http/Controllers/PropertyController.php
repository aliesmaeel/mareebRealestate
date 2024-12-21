<?php

namespace App\Http\Controllers;

use App\Models\AllProperty;
use App\Models\ContactPage;
use App\Models\Footer;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{

    public function allproperties(){
        $properties = AllProperty::all();
        $contact=ContactPage::Active()->first();
        $footer=Footer::Active()->first();

        return view('all_properties',
            compact('properties','footer','contact'));
    }

    public function index(Request $request){

        $footer=Footer::Active()->first();
        $contact=ContactPage::Active()->first();
        $property=Property::Active()
            ->with('propertyImages','amenities','agent','community','subCommunity')
            ->where('slug',$request->slug)
            ->first();
        $relatedProperties=Property::Active()
            ->with('propertyImages','amenities','agent','community','subCommunity')
       //     ->where('community_id',$property->community_id)
            ->where('id','!=',$property->id)
            ->take(3)->get();

        return view('show_property')
            ->with('contact',$contact)
            ->with('property',$property)
            ->with('relatedProperties',$relatedProperties)
            ->with('footer',$footer);
    }
    public function search(){

        $footer=Footer::Active()->first();
        $contact=ContactPage::Active()->first();
        return view('search_result')->with('footer',$footer)->with('contact',$contact);
    }

    public function getpropertybytype($type){
        switch ($type){
            case 'laborcamp':
                $type='Labour Camp';
                break;
            case 'residentialbuilding':
                $type='Residential Building';
                break;
            case 'commercialfloors':
                $type='Commercial Floors';
                break;
            case 'showroom':
                $type='Showroom';
                break;
        }
        $properties= Property::Active()
            ->with('propertyImages','amenities','agent','community','subCommunity')
            ->where('type',$type)
            ->get();
        $contact=ContactPage::Active()->first();
        $footer=Footer::Active()->first();
        return view('search_result',
            compact('properties','type','footer','contact'));

    }

}
