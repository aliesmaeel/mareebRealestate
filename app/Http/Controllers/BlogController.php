<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\ContactPage;
use App\Models\Footer;
use App\Models\Property;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){

        $blogs=Blog::get();
        $footer=Footer::Active()->first();
        $contact=ContactPage::Active()->first();
        $latestProperties = Property::Active()->orderBy('created_at','desc')->get()->take(3);
        $socialMediaLinks = SocialMedia::Active()->get();

        return view('blogs.allBlogs',compact('socialMediaLinks','latestProperties','blogs','footer','contact'));
    }

    public function blog(Request $request){
        $blog=Blog::where('slug',$request->slug)->first();
        $footer=Footer::Active()->first();
        $contact=ContactPage::Active()->first();
        $latestProperties = Property::Active()->orderBy('created_at','desc')->get()->take(3);
        $socialMediaLinks = SocialMedia::Active()->get();

        return view('blogs.blog',compact('socialMediaLinks','latestProperties','blog','footer','contact'));

    }


}
