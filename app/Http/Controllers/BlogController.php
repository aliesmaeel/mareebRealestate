<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\ContactPage;
use App\Models\Footer;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){

        $blogs=Blog::get();
        $footer=Footer::Active()->first();
        $contact=ContactPage::Active()->first();

        return view('blogs.allBlogs',compact('blogs','footer','contact'));
    }

    public function blog(Request $request){
        $blog=Blog::where('slug',$request->slug)->first();
        $footer=Footer::Active()->first();
        $contact=ContactPage::Active()->first();
        return view('blogs.blog',compact('blog','footer','contact'));

    }
}
