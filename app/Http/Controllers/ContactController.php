<?php

namespace App\Http\Controllers;

use App\Models\ContactPage;
use App\Models\Footer;
use App\Models\Property;
use App\Models\Seo;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index () {
        $footer= Footer::Active()->first();
        $contact=ContactPage::Active()->first();
        $latestProperties = Property::Active()->orderBy('created_at','desc')->get()->take(3);
        $socialMediaLinks = SocialMedia::Active()->get();
        $seo=Seo::where('page_name','contact')->first();
        return view('contact_us')
            ->with('seo',$seo)
            ->with('socialMediaLinks',$socialMediaLinks)
            ->with('latestProperties',$latestProperties)
            ->with('contact',$contact)
            ->with('footer',$footer);
    }
}
