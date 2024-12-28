<?php

namespace App\Http\Controllers;

use App\Models\AllProperty;
use App\Models\Community;
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
        $communitiesId = Property::Active()->get()->pluck('community_id')->unique();
        $communities = Community::whereIn('id',$communitiesId)->get();
        $propertyTypes=$this->getPropertyTypes();
        $scrollToSection = 'available_property';

        return view('all_properties',
            compact('properties','footer','contact','communities','propertyTypes'))
            ->with('scrollToSection','available_property');
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
    public function search(Request $request){

        $searchResults=Property::Active()
            ->with('propertyImages','amenities','agent','community','subCommunity')
            ->when($request->communities,function($query) use ($request){
                $query->whereIn('community_id',$request->communities);
            })
            ->when($request->property_type,function($query) use ($request){
                $query->whereIn('type',$request->property_type);
            })
            ->when($request->min_price,function($query) use ($request){
                $query->where('price','>=',$request->min_price);
            })
            ->when($request->max_price,function($query) use ($request){
                $query->where('price','<=',$request->max_price);
            })
            ->get();

        $communitiesId = Property::Active()->get()->pluck('community_id')->unique();
        $communities = Community::whereIn('id',$communitiesId)->get();
        $propertyTypes=$this->getPropertyTypes();

        $footer=Footer::Active()->first();
        $contact=ContactPage::Active()->first();
        return view('search_result')
            ->with('footer',$footer)
            ->with('communities',$communities)
            ->with('propertyTypes',$propertyTypes)
            ->with('searchResults',$searchResults)
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
        $searchResults= Property::Active()
            ->with('propertyImages','amenities','agent','community','subCommunity')
            ->where('type',$type)
            ->get();
        $communitiesId = Property::Active()->get()->pluck('community_id')->unique();
        $communities = Community::whereIn('id',$communitiesId)->get();
        $propertyTypes=$this->getPropertyTypes();

        $contact=ContactPage::Active()->first();
        $footer=Footer::Active()->first();
        return view('search_result',
            compact('searchResults','type','footer','contact','communities','propertyTypes'));

    }

}
