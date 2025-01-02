<?php

namespace App\Http\Controllers;

use App\Models\ContactPage;
use App\Models\Footer;
use App\Models\Property;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index () {
        $footer= Footer::Active()->first();
        $contact=ContactPage::Active()->first();
        $latestProperties = Property::Active()->orderBy('created_at','desc')->get()->take(3);

        return view('contact_us')
            ->with('latestProperties',$latestProperties)
            ->with('contact',$contact)
            ->with('footer',$footer);
    }
}
