<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index(){
        $footer=Footer::Active()->first();
        return view('show_property')->with('footer',$footer);
    }
    public function search(){

        $footer=Footer::Active()->first();
        return view('search_result')->with('footer',$footer);
    }
}
