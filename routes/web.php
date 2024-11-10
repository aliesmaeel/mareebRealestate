<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\TeamController;
use App\Models\Footer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;

Route::get('/', [HomePageController::class,'index']);

Route::get('/contact-us',[ContactController::class,'index']);
Route::get('/our-team',[TeamController::class,'index']);
Route::get('/about-us', function () {
    $footer= Footer::Active()->first();
    return view('about_us')->with('footer',$footer);
});
Route::get('/team-profile', function () {
    return view('team-profile');
});
Route::get('/search-result',[PropertyController::class,'search']);
Route::get('/property-details',[PropertyController::class,'index'])
    ->name('property.show');

Route::get('/all-countries', [CountryController::class, 'getCountries']);
