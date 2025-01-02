<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\ContactPage;
use App\Models\Footer;
use App\Models\Property;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){

        $blogs=Blog::get();
        $footer=Footer::Active()->first();
        $contact=ContactPage::Active()->first();
        $latestProperties = Property::Active()->orderBy('created_at','desc')->get()->take(3);

        return view('blogs.allBlogs',compact('latestProperties','blogs','footer','contact'));
    }

    public function blog(Request $request){
        $blog=Blog::where('slug',$request->slug)->first();
        $footer=Footer::Active()->first();
        $contact=ContactPage::Active()->first();
        $latestProperties = Property::Active()->orderBy('created_at','desc')->get()->take(3);

        return view('blogs.blog',compact('latestProperties','blog','footer','contact'));

    }


}
