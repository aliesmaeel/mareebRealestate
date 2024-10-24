<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function getCountries()
    {
        $jsonFilePath = public_path('/country_dial_info.json');

        if (File::exists($jsonFilePath)) {
            $countries = json_decode(File::get($jsonFilePath), true);
            return response()->json($countries);
        } else {
            return response()->json(['message' => 'Countries data not found.'], 404);
        }
    }
}
