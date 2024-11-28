<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Footer;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){

        $blogs=Blog::get();
        $footer=Footer::Active()->first();
        return view('blogs',compact('blogs','footer'));
    }

    public function blog(Request $request){
        dd($request->slug);
    }
}
