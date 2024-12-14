<?php

namespace App\Http\Controllers;

use App\Models\ContactPage;
use App\Models\Footer;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index () {
        $footer= Footer::Active()->first();
        $contact=ContactPage::Active()->first();

        return view('contact_us')
            ->with('contact',$contact)
            ->with('footer',$footer);
    }
}
