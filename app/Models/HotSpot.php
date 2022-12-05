<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotSpot extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'status', 'description', 'image', 'postcode', 'lat', 'lng'];

    // protected static function booted()
    // {
    //     static::saving(function ($hotspot) {
    //         if ($hotspot->isDirty('postcode')) {
    //             $lat_lng = self::getLatLong($hotspot->postcode);

    //             $hotspot->lat = $lat_lng['latitude'];
    //             $hotspot->lng = $lat_lng['longitude'];
    //         }
    //     });
    // }


    // public static function getLatLong($address)
    // {
    //     $result = array();
    //     $apiKey = env('GOOGLE_MAP_KEY');
    //     $address = urlencode($address);
    //     $googleMapsUrl = "https://maps.googleapis.com/maps/api/geocode/json?address=" . $address . "&key=" . $apiKey;
    //     $responseData = @file_get_contents($googleMapsUrl);
    //     $responseData = json_decode($responseData);

    //     dd($responseData);
    //     if (($responseData) && ($responseData == 'OK')) {
    //         $result['longitude'] = $responseData->results[0]->geometry->location->lng;
    //         $result['latitude'] = $responseData->results[0]->geometry->location->lat;
    //     } else {
    //         $result['longitude'] = 0;
    //         $result['latitude'] = 0;
    //     }

    //     return $result;
    // }
}
