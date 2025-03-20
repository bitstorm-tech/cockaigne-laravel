<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GeoService
{
    public static function pointFromAddress(string $street, string $houseNumber, string $city, int $postalCode): array
    {
        $response = Http::get('https://nominatim.openstreetmap.org/search', [
            'email' => 'a@b.com',
            'format' => 'json',
            'street' => $street.','.$houseNumber,
            'city' => $city,
            'postalcode' => $postalCode,
        ])->throw();

        $content = json_decode($response->getBody()->getContents());

        return [
            'lon' => $content[0]->lon,
            'lat' => $content[0]->lat,
        ];
    }
}
