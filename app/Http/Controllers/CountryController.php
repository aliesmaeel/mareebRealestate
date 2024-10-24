<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function fetchAndSaveCountries()
    {
        // Fetch data from the provided URL
        $url = 'https://gist.githubusercontent.com/DmytroLisitsyn/1c31186e5b66f1d6c52da6b5c70b12ad/raw/2bc71083a77106afec2ec37cf49d05ee54be1a22/country_dial_info.json';
        
        $data = json_decode(file_get_contents($url), true);
        
        $jsonFilePath = storage_path('app/country_dial_info.json');
        
        File::put($jsonFilePath, json_encode($data, JSON_PRETTY_PRINT));

        return response()->json(['message' => 'Countries data saved successfully!', 'file' => $jsonFilePath]);
    }

    public function getCountries()
    {
        $jsonFilePath = storage_path('app/country_dial_info.json');
        
        if (File::exists($jsonFilePath)) {
            $countries = json_decode(File::get($jsonFilePath), true);
            return response()->json($countries);
        } else {
            return response()->json(['message' => 'Countries data not found.'], 404);
        }
    }
}
