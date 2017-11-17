<?php
namespace App\Http\Utilities;

class Country{


    protected static $countries = [
        "United States",
        "United Kingdom",
        "Germany",
        "China",
        "Pakistan",
        "India"

    ];
    public static function all()
    {

        $countryArray = array();

        foreach (static::$countries as $country){

            $countryArray[$country] = $country;
        }
        return $countryArray;

    }
}


