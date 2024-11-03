<?php

use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;

Route::get('/', [HomePageController::class,'index']);

Route::get('/contact-us', function () {
    return view('contact_us');
});
Route::get('/our-team', function () {
    return view('our_team');
});
Route::get('/about-us', function () {
    return view('about_us');
});
Route::get('/search_result', function () {
    return view('search_result');
});
Route::get('/show_property', function () {
    return view('show_property');
})->name('Property');

Route::get('/all_countries', [CountryController::class, 'getCountries']);
