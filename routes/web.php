<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;

Route::get('/', [HomePageController::class,'index']);

Route::get('/contact-us', function () {
    $footer=\App\Models\Footer::Active()->first();
    return view('contact_us')->with('footer',$footer);
});
Route::get('/our-team', function () {
    return view('our_team');
});
Route::get('/about-us', function () {
    return view('about_us');
});
Route::get('/search-result',[PropertyController::class,'search']);
Route::get('/show-property',[PropertyController::class,'index'])
    ->name('property.show');

Route::get('/all-countries', [CountryController::class, 'getCountries']);
