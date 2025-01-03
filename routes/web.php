<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\TeamController;
use App\Models\Footer;
use App\Models\Property;
use App\Models\Seo;
use App\Models\SocialMedia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;

Route::get('/', [HomePageController::class,'index']);

Route::get('/contact-us',[ContactController::class,'index']);
Route::get('/our-team',[TeamController::class,'index']);
Route::get('/about-us', function () {
    $footer= Footer::Active()->first();
    $aboutUs=\App\Models\AboutUs::first();
    $contact=\App\Models\ContactPage::Active()->first();
    $latestProperties = Property::Active()->orderBy('created_at','desc')->get()->take(3);
    $socialMediaLinks = SocialMedia::Active()->get();
    $seo=Seo::where('page_name','about')->first();
    return view('about_us')
        ->with('seo',$seo)
        ->with('socialMediaLinks',$socialMediaLinks)
        ->with('latestProperties',$latestProperties)
        ->with('footer',$footer)
        ->with('contact',$contact)
        ->with('aboutus',$aboutUs);
});
Route::get('/team-profile', function () {
    return view('team-profile');
});
Route::post('/',[PropertyController::class,'search'])->name('searchProperty');
Route::get('/search-result',[PropertyController::class,'search']);

Route::get('/search-result/{type}',[PropertyController::class,'getpropertybytype']);
Route::get('/property-details/{slug}',[PropertyController::class,'index'])
    ->name('property.show');

Route::get('/properties',[PropertyController::class,'allproperties']);

Route::get('/all-countries', [CountryController::class, 'getCountries']);
Route::get('/blogs', [BlogController::class, 'index']);
Route::get('/blogs/{slug}', [BlogController::class, 'blog'])->name('get_blog_details');
Route::post('/submit-email', [HomePageController::class, 'submitEmail'])->name('submit-email');
