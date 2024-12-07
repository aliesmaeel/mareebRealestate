<?php

namespace App\Http\Controllers;

use App\Models\ContactPage;
use App\Models\Footer;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index () {
        $footer= Footer::Active()->first();
        $contactus=ContactPage::Active()->first();

        return view('contact_us')
            ->with('contactus',$contactus)
            ->with('footer',$footer);
    }
}
