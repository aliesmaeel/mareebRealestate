<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact-us', function () {
    return view('contact_us');
});
Route::get('/our-team', function () {
    return view('our_team');
});

Route::get('/all_countries', [CountryController::class, 'getCountries']);
