<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\TeamController;
use App\Models\Footer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;

Route::get('/', [HomePageController::class,'index']);

Route::get('/contact-us', function () {
    $footer= Footer::Active()->first();
    return view('contact_us')->with('footer',$footer);
});
Route::get('/our-team',[TeamController::class,'index']);
Route::get('/about-us', function () {
    $footer= Footer::Active()->first();
    return view('about_us')->with('footer',$footer);
});
Route::get('/search-result',[PropertyController::class,'search']);
Route::get('/show-property',[PropertyController::class,'index'])
    ->name('property.show');

Route::get('/all-countries', [CountryController::class, 'getCountries']);
